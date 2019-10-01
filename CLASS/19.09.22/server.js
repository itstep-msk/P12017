var express = require("express");
var bodyParser = require("body-parser");
var fs = require("fs");
var server = express();
var news = [
	{
		title: "Кофе",
		content: "Какая-то новость про кофе..."
	}
];

server.use(bodyParser.urlencoded());
server.listen(7777);

server.get("/", function(request, response) {
	response.send("home page")
})

server.get("/news", function(request, response) {
	response.send(news);
})

server.get("/news/add", function(request, response) {
	var file = fs.readFileSync("./templates/news-add.html", "utf8");

	response.send(file);
})

server.post("/news-handler", function(request, response) {
	var newsData = {
		title: request.body.title,
		content: request.body.content
	}

	news.push(newsData);
	response.send("Данные отправленны");
})

server.get("/news/:newsId", function(request, response) {
	var id = request.params.newsId;
	var file = fs.readFileSync("templates/news-template.html", "utf8");

	if(id > news.length - 1) {
		response.send("Нет такой новости");
	} else {
		file = file.replace("%title%", news[id].title);
		file = file.replace("%content%", news[id].content);
		response.send(file);
	}
})

server.get("*", function(request, response) {
	response.send("404 not found");
})