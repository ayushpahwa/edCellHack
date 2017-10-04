<?php
use App\Lecture;

use Response\NotFoundResponse;
use Response\ForbiddenResponse;
use Response\PreconditionFailedResponse;
use Response\PreconditionRequiredResponse;

use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use League\Fractal\Resource\Collection;
use League\Fractal\Serializer\DataArraySerializer;

$app->get("/stats", function ($request, $response, $arguments) {

	$Lecture = $this->spot->mapper("App\Lecture")
	->query("SELECT rating FROM lectures where timestamp < '2017-10-04';");
	$fractal = new Manager();
	$fractal->setSerializer(new DataArraySerializer);
	return $response->withStatus(200)
	->withHeader("Content-Type", "application/json")
	->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
});



$app->get("/company/{id}", function ($request, $response, $arguments) {

	$data->message = "success";

	return $response->withStatus(200)
	->withHeader("Content-Type", "application/json")
	->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
});


$app->post("/company/{id}/rate", function ($request, $response, $arguments) {

	$data->message = "success";

	return $response->withStatus(200)
	->withHeader("Content-Type", "application/json")
	->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
});

$app->post("/plan/{id}/like", function ($request, $response, $arguments) {

	$data->message = "success";

	return $response->withStatus(200)
	->withHeader("Content-Type", "application/json")
	->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
});

$app->post("/plan/{id}/review", function ($request, $response, $arguments) {

	$data->message = "success";

	return $response->withStatus(200)
	->withHeader("Content-Type", "application/json")
	->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
});

$app->post("/plan/{id}/discussion", function ($request, $response, $arguments) {

	$data->message = "success";

	return $response->withStatus(200)
	->withHeader("Content-Type", "application/json")
	->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
});
