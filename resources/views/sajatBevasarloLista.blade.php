<div>
    <!-- It always seems impossible until it is done. - Nelson Mandela -->
<ul>
    <?php

    foreach ($bevasarloLista as $elem){?>

        <li><?php echo $elem ?></li>

    <?php }?>




    </ul>


    <br>
    <hr width="85%" style="color: green">
    <br>

    <ol>
    @foreach ($bevasarloLista as $elem )
        <li>{{$elem}}</li>
    @endforeach
    </ol>
</div>
