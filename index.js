// Importación de módulos
const path = require('path');   // Para ejecutar desde index.html

const express = require('express');
const connection = require('./conexion');
const { error } = require('console');

// Inicialización de la aplicación Express
const app = express();
app.use(express.json());  // Middleware para parsear solicitudes con formato JSON

// Servir el archivo index.html
app.use(express.static(path.join(__dirname, 'template')));

// Ruta GET para verificar el estado de la API
app.get('/api/prueba', (req, res) => {
    res.send("La Api esta funcionando bien....");
});

/** Ruta GET de prueba
 * Devuelve un mensaje y detalles adicionales como el puerto y el estado de la respuesta */
app.get('/api/prueba1', (req, res) => {  // Corrección de sintaxis en la ruta '/api/prueba1' (faltaba '/')
    const PORT = 3000;  // Definición del puerto utilizado para referenciarlo en la respuesta
    res.status(200).json({
        message: 'La API responde bien..',
        port: PORT,
        status: 'success'
    });
});

// Consultar los registros de la Tabla
app.get('/api/obtener', (req, res) => {
    const query = "SELECT * FROM  persona";
    connection.query(query, (error, result) => {

        if (error) {
            res.status(500).json({
                success: false,
                message: "Error de recuperacion datos",
                datails: error.message
            });
        } else {
            res.status(200).json({
                success: true,
                message: "Datos de la tabla",
                data: result
            });
            //res.json(result);
        }
    })
});
/* Crear api POST */
// Ruta POST para guardar un registro en la base de datos
app.post('/api/guardar', (req, res) => {  // Eliminación de la barra adicional en '/api/guardar/'
    const { cedula, nombre, edad, profesion } = req.body;

    // Consulta SQL para insertar una nueva persona en la tabla 'persona'
    const sql = 'INSERT INTO persona(cedula, nombre, edad, profesion) VALUES(?,?,?,?)';
    connection.query(sql, [cedula, nombre, edad, profesion], (error, result) => {  // Corrección de sintaxis al pasar parámetros a connection.query()

        if (error) {
            res.status(500).json({ error });
        } else {
            res.status(201).json({ id: result.insertId, cedula, nombre, edad, profesion });
        }
    });
});

// Nueva ruta PUT para actualizar un registro en la base de datos
app.put('/api/actualizar/:cedula', (req, res) => {
    const { cedula } = req.params;
    const { nombre, edad, profesion } = req.body;

    // Validación para asegurar que el campo 'cedula' esté presente
    if (!cedula) {
        return res.status(400).json({ error: "El campo 'cedula' es obligatorio para la actualización." });
    }

    const sql = 'UPDATE persona SET nombre = ?, edad = ?, profesion = ? WHERE cedula = ?';
    connection.query(sql, [nombre, edad, profesion, cedula], (error, result) => {
        if (error) {
            res.status(500).json({ error });
        } else if (result.affectedRows === 0) {
            res.status(404).json({ message: "No se encontró una persona con la cédula proporcionada." });
        } else {
            res.status(200).json({ message: "Registro actualizado exitosamente", cedula, nombre, edad, profesion });
        }
    });
});

// Nueva ruta PUT para actualizar un registro en la base de datos
app.delete('/api/eliminar/:cedula', (req, res) => {
    const { cedula } = req.params;

    // Validación para asegurar que el campo 'cedula' esté presente
    if (!cedula) {
        return res.status(400).json({ error: "El campo 'cedula' es obligatorio para el borrado." });
    }

    const query = 'DELETE FROM persona WHERE cedula = ?';
    connection.query(query, [cedula], (error, result) => {
        if (error) {
            res.status(500).json({ error });
        } else if (result.affectedRows === 0) {
            res.status(404).json({ message: "No se encontró una persona con la cédula proporcionada." });
        } else {
            res.status(200).json({ message: `Registro Borrado exitosamente: ${cedula}` });
        }
    });
});

// Configuración del puerto y mensaje de conexión
const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Servidor en ejecución en el puerto ${PORT}`);
});
