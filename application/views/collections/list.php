<a href="#/col/new"> Crear </a> 

<table ng-show="collections != 0"> 
    <head> 
        <th>Id</th> 
        <th style="min-width: 300px">Nombre</th> 
        <th>Opciones</th> 
    </head> 
    <body> 
    <tr ng-repeat="(k, collection) in collections">
            <td> {{ k + 1 }}</td>
            <td> {{ collection.nombre }} </td>
            <td> 
                <a href="#/col/{{ collection.id }}"> Detalles </a> 
                <a> Editar </a> 
                <a> Elementos </a> 
                <a> Eliminar </a> 
            </td> 
        </tr> 
    </body>
</table>

