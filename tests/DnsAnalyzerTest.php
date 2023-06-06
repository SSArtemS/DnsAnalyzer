<?php

use Galeas\DnsAnalyzer\DnsAnalyzer;
use PHPUnit\Framework\TestCase;

class DnsAnalyzerTest extends TestCase
{
    public function testGetAllRecords()
    {
        $dnsResolver = new DnsAnalyzer();
        $domain = 'gmail.com';

        $res = $dnsResolver->getAllRecords($domain);

        $this->assertIsArray($res);
    }

    public function testGetAllRecordsWithInvalidDomain()
    {
        $dnsResolver = new DnsAnalyzer();
        $domain = 'invalid-domain';

        $res = $dnsResolver->getAllRecords($domain);

        $this->assertIsNotArray($res);
    }
}
