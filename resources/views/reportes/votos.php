
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

                <th > Partido </th>

                <th > Votos </th>

                <th > Mesa </th>

                <th > Recinto </th>

                <th > Departamento </th>
                
            </tr>
        </thead>

        <tbody>
            <?php foreach ($votos as $key => $voto) { ?>
                <tr>

                    <td ><?= $key + 1 ?></td>

                    <td ><?= $voto->partido ?></td>

                    <td ><?= $voto->votos ?></td>

                    <td ><?= $voto->mesa ?></td>

                    <td ><?= $voto->recinto ?></td>

                    <td ><?= $voto->departamento ?></td>

                </tr>
                
            <?php } ?>
            
        </tbody>
            
    </table>
</div>

</html>