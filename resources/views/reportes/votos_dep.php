
<html>

<div style="width: 100%; border-bottom: 1px solid #e8e8e8; height: 30px;">
    <div style="float: right;">
        <label style="font-size: 18px;"><?= $fecha ?></label>
    </div>
</div>

<div style="width: 100%; display: flex; justify-content: center; 
        align-items: center;">
    <h1 style="font-weight: 100; font-size: 30px; text-align: center;">
        Reporte de Votos
    </h1>
</div>

<div style="width: 100%; padding-bottom: 8px;">
    <table style="width: 100%; border-color: #666666; border-style: dashed; border-width: 1px; padding-top: 5px;">
        
        <thead>
        
            <tr>
                <th > Nro </th>

                <th > Departamento </th>
                
            </tr>
        </thead>

        <tbody>
            <?php
                $i = 0;

                while ($i < count($data)) { 
                $j = 0;
            ?>
                <tr>

                    <td ><?= $i + 1 ?></td>

                    <td style="font-size: 24px;"><?= $data[$i]['ciudad'] ?></td>
                    
                </tr>
                <tr>
                    <th>#</th>
                    <th>Partido</th>
                    <th>Votos</th>
                </tr>
                
                <?php
                    $resultado = $data[$i]['resultados'];
                    $count = sizeof($resultado);
                    // dd($count);
                    $j = 0;
                    while ($j < $count) {
                        echo '<tr>';
                        echo '<td></td>';
                        echo '<td>' . ($resultado[$j]['sigla']) . '</td>';
                        echo '<td>' . ($resultado[$j]['votos']) . '</td>';
                        echo '</tr>';
                        $j++;
                    }
                    ?>
            <?php 
                $i++;
                } 
            ?>
            
        </tbody>
            
    </table>
</div>

</html>