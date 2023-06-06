<?php

namespace Galeas\DnsAnalyzer;

class DnsAnalyzer
{
    public function getAllRecords(string $domain): array|string
    {
        try {
            return dns_get_record($domain, DNS_ALL);
        } catch (\ErrorException $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
