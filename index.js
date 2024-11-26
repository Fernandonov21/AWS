const express = require('express');
const path = require('path');
const mysql = require('mysql2');
const app = express();
const port = 3000;

// Configuración de la conexión a MySQL
const db = mysql.createConnection({
    host: '107.22.5.182',
    user: 'usuario_remoto',
    password: 'FxNc10082002*',
    database: 'gestion_proyectos' // Cambia por el nombre de tu base
});

db.connect(err => {
    if (err) {
        console.error('Error al conectar con la base de datos:', err.message);
    } else {
        console.log('Conectado a la base de datos MySQL');
    }
});

// Ruta para servir el HTML
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'index.html'));
});

// Ruta para obtener datos de la base de datos
app.get('/datos', (req, res) => {
    db.query('SELECT * FROM usuarios', (err, results) => {
        if (err) {
            console.error('Error en la consulta:', err);
            res.status(500).send('Error al consultar datos');
        } else {
            console.log('Datos obtenidos:', results); // Esto imprime los datos en la consola
            res.json(results);
        }
    });
});


app.listen(port, '0.0.0.0', () => {
    console.log(`Servidor escuchando en http://0.0.0.0:${port}`);
});