<?php
//Importa o autoload para utilização das classes e métodos
require_once __DIR__.'/../../../vendor/autoload.php';

use \Gestor\Model\ArquivoModel;

$arquivos = (new ArquivoModel)->retornaTodosOsArquivos();

foreach($arquivos as $arquivo => $value){
    
    echo "<tr>
            <th scope='row' class='text-center'>{$value['arquivoId']}</th>
            <td class='text-center'>{$value['arquivoNome']}</td>
            <td class='text-center'>{$value['arquivo_dataUpload']}</td>
            <td class='text-center'>
                <a href='{$value['arquivo']}' download>
                    <i class='fas fa-cloud-download-alt'></i>
                </a>   
            </td>
        </tr>";
}



?>