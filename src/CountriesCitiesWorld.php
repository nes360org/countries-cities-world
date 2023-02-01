<?php

namespace CountriesCitiesWorld;

use GuzzleHttp\Client;

class CountriesCitiesWorld
{
    public function getCountries()
    {
        $client = new Client();
        $response = $client->get('https://restcountries.com/v3.1/all');
        $paises = json_decode($response->getBody(), true);

        return $paises;
    }

    public function getCities(string $pais)
    {
        $client = new Client();
        $response = $client->get('https://restcountries.com/v3.1/name/'.$pais);
        $ciudades = json_decode($response->getBody(), true);

        return $ciudades;
    }

}
