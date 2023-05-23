$ports = Get-NetTCPConnection -State Listen | Select-Object LocalAddress, LocalPort

$xml = "<OPENPORTS>`n"
foreach ($port in $ports) {
    $xml += "<ADDRESS>" + $port.LocalAddress + "</ADDRESS>`n"
    $xml += "<PORTNUMBER>" + $port.LocalPort + "</PORTNUMBER>`n"
    $xml += "</OPENPORTS>`n"
    [Console]::WriteLine($xml)
    [Console]::OutputEncoding = [System.Text.Encoding]::UTF8
    $xml = "<OPENPORTS>`n"
}



