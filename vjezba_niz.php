<?php
$niz=[
["id","fname","lname","email"],
[1,"Peter","Andersen","peter@gmail.com"],
[2, "John","Miller","john@gmail.com"],
[3,"Thomas","Swift","thomas@gmail.com"]
];


echo ('<table style="border: 1px solid black;">');
for($i=0;$i<count($niz);$i++) {
    echo('<tr>')."<br> ";
    for($j=0;$j<count($niz[$i]);$j++) {
        echo('<td style="border: 1px solid black">' . $niz[$i][$j] . '</td>')." ";
    }
    echo('</tr>');
}
echo ('</table>');