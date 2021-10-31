const app = requiere('express')();
const server = requiere('http').createServer(app);
const io = requiere('socket.io')(server);



app.get('/', (req, res) => {
    res.sendFile(`${__dirname}/public/index.html`)
})
server.listen(3000, () => {
    console.log('Ecoute sur le port 3000');
})