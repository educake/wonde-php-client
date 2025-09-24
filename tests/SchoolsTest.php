<?php

use GuzzleHttp\Exception\ClientException;
use PHPUnit\Framework\TestCase;
use \Wonde\Client;

class SchoolsTest extends TestCase
{
    private const BASE_URL = 'schools/';
    private $schoolsApi;
    protected function setUp(): void
    {
        $this->token = file_get_contents(__DIR__ . '/../.token');
        $client = new Client($this->token);
        $this->schoolsApi = $client->schools;
    }

//    public function testSearchSchoolEndpointIsNotCorrectAfterMultipleCalls()
//    {
//        $this->schoolsApi->search([], ['postcode' => 'EC3A']);
//        $this->assertEquals('schools/all/', $this->schoolsApi->uri);
//
//        $this->expectException(ClientException::class);
//        $this->schoolsApi->search([], ['postcode' => 'EC3B']);
//        $this->assertEquals('schools/all/all/', $this->schoolsApi->uri);
//
//        $this->expectException(ClientException::class);
//        $this->schoolsApi->search([], ['postcode' => 'EC3B']);
//        $this->assertEquals('schools/all/all/all/', $this->schoolsApi->uri);
//    }

//    public function testSchoolsPendingEndpointIsNotCorrectAfterMultipleCalls()
//    {
//        $this->schoolsApi->pending();
//        $this->assertEquals('schools/pending/', $this->schoolsApi->uri);
//
//        $this->expectException(ClientException::class);
//        $this->schoolsApi->pending();
//        $this->assertEquals('schools/pending/pending/', $this->schoolsApi->uri);
//    }

//    public function testSchoolAuditedEndpointIsNotCorrectAfterMultipleCalls()
//    {
//        $this->schoolsApi->audited();
//        $this->assertEquals('schools/audited/', $this->schoolsApi->uri);
//
//        $this->expectException(ClientException::class);
//        $this->schoolsApi->audited();
//        $this->assertEquals('schools/audited/audited/', $this->schoolsApi->uri);
//    }

//    public function testSchoolDeclinedEndpointIsNotCorrectAfterMultipleCalls()
//    {
//        $this->schoolsApi->declined();
//        $this->assertEquals('schools/declined/', $this->schoolsApi->uri);
//
//        $this->expectException(ClientException::class);
//        $this->schoolsApi->declined();
//        $this->assertEquals('schools/declined/declined/', $this->schoolsApi->uri);
//    }

//    public function testSchoolRevokedEndpointIsNotCorrectAfterMultipleCalls()
//    {
//        $this->schoolsApi->revoked();
//        $this->assertEquals('schools/revoked/', $this->schoolsApi->uri);
//
//        $this->expectException(ClientException::class);
//        $this->schoolsApi->revoked();
//        $this->assertEquals('schools/revoked/revoked/', $this->schoolsApi->uri);
//    }


    public function testSchoolsPendingEndpointIsCorrectAfterMultipleCalls()
    {
        $this->schoolsApi->pending();
        $this->assertEquals('schools/pending/', $this->schoolsApi->uri);

        $this->schoolsApi->pending();
        $this->assertEquals('schools/pending/', $this->schoolsApi->uri);
    }

    public function testSchoolAuditedEndpointIsCorrectAfterMultipleCalls()
    {
        $this->schoolsApi->audited();
        $this->assertEquals('schools/audited/', $this->schoolsApi->uri);

        $this->schoolsApi->audited();
        $this->assertEquals('schools/audited/', $this->schoolsApi->uri);
    }

    public function testSchoolDeclinedEndpointIsCorrectAfterMultipleCalls()
    {
        $this->schoolsApi->declined();
        $this->assertEquals('schools/declined/', $this->schoolsApi->uri);

        $this->schoolsApi->declined();
        $this->assertEquals('schools/declined/', $this->schoolsApi->uri);
    }

    public function testSchoolRevokedEndpointIsCorrectAfterMultipleCalls()
    {
        $this->schoolsApi->revoked();
        $this->assertEquals('schools/revoked/', $this->schoolsApi->uri);

        $this->schoolsApi->revoked();
        $this->assertEquals('schools/revoked/', $this->schoolsApi->uri);
    }

    public function testSearchSchoolEndpointIsCorrectAfterMultipleCalls()
    {
        $this->schoolsApi->search([], ['postcode' => 'SW1A']);
        $this->assertEquals('schools/all/', $this->schoolsApi->uri);

        $this->schoolsApi->search([], ['postcode' => 'SW1A']);
        $this->assertEquals('schools/all/', $this->schoolsApi->uri);

        $this->schoolsApi->search([], ['postcode' => 'SW1A']);
        $this->assertEquals('schools/all/', $this->schoolsApi->uri);
    }

//    public static function uriParams()
//    {
//        $fullUrl = 'https://wonde.com/' . self::BASE_URL;
//        return [
//            [$fullUrl, 1, 'all/'],
//            [$fullUrl, null, 'all/'],
//            [$fullUrl, null, ''],
//            [$fullUrl, null, null],
//        ];
//    }
//
//    /**
//     *@dataProvider uriParams
//     */
//    public function testConstructUriMethod($url, $id, $endpoint)
//    {
//        var_dump($this->schoolsApi->constructUri($url, $id, $endpoint));
//    }
}