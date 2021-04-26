const http = require('http');
const port = 8000;

const url = require('url');

const requestHandler = (request, response) => {
    console.log(request.url);
    const parsedUrl = url.parse(request.url, true);

    if ("name" in parsedUrl.query === true && "city" in parsedUrl.query) {
        response.end(`Hello ${parsedUrl.query.name} from ${parsedUrl.query.city}`);
    } else {
        response.end('Please provide name AND city parameters');
    }
};

const server = http.createServer(requestHandler);
server.listen(port, (err) => {
    if (err) {
        console.error('Something bad happened');
    } else {
        console.log(`server is listening on ${port}`);
    }
});