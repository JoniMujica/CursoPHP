<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #ccc;
        }
        .flex-container-1, .flex-container-2,.flex-container-3,.flex-container-4,.flex-container-5,.flex-container-6, .flex-container-7,.flex-container-8,.flex-container-9,.flex-container-10,.flex-container-11,.flex-container-12,.flex-container-13,.flex-container-14,.flex-container-15,.flex-container-16,.flex-container-17,.flex-container-18,.flex-container-19,.flex-container-20,.flex-container-21,.flex-container-22,.flex-container-23,.flex-container-24,.flex-container-25,.flex-container-26,.flex-container-27,.flex-container-28{
            display: flex;
            background-color: #fff;
            padding: 20px;
            height: 300px;
        }
        .item{
            width: 25%;
            height: 50PX;
            background-color: #2ECC71;
            display: inherit; /* ESTO TRAE LA PROPIEDAD DEL ELEMENTO PADRE */
            justify-content: center;
            align-items: center;
            /*flex-basis: content;*/
        }
        .item:nth-child(2n){/** CON  :nth-child le digo que a los hijos les aga X accion, y el 2n la interracion de cada elemento */ 
            background-color: #A569BD;
        }

        .flex-container-2{
            flex-direction: row;
        }
        .flex-container-3{
            flex-direction: row-reverse;
        }
        .flex-container-4{
            flex-direction: column;
        }
        .flex-container-5{
            flex-direction: column-reverse;
        }
        .flex-container-6{
            flex-wrap:wrap;
        }
        .flex-container-7{
            flex-wrap: wrap-reverse;
        }
        .flex-container-8{
            justify-content: flex-start;
        }
        .flex-container-9{
            justify-content: flex-start;
            flex-direction: row-reverse;
        }
        .flex-container-10{
            justify-content: flex-end;
        }
        .flex-container-11{
            justify-content: flex-end;
            flex-direction: row-reverse;
        }
        .flex-container-12{
            justify-content: center;
        }
        .flex-container-13{
            justify-content: space-between;
        }
        .flex-container-14{
            justify-content: space-around;
        }
        .flex-container-15{
            justify-content: space-evenly;
        }
        .flex-container-16{
            align-content: flex-end;
            flex-wrap: wrap;
        }
        .flex-container-17{
            align-content: flex-end;
            flex-wrap: wrap-reverse;
        }
        .flex-container-18{
            align-content: center;
            flex-wrap: wrap;
        }
        .flex-container-19{
            align-content: stretch;
            flex-wrap: wrap;
        }
        .flex-container-19 .item, .flex-container-24 .item{
            height: auto;
        }
        .flex-container-20{
            align-content: space-between;
            flex-wrap: wrap;
        }
        .flex-container-21{
            align-content: space-around;
            flex-wrap: wrap;
        }
        .flex-container-22{
            align-items: flex-end;
        }
        .flex-container-23{
            align-items: center;
        }
        .flex-container-24{
            align-items: stretch;
        }
        .flex-container-25,.flex-container-26{
            align-items: baseline;
        }
        .flex-container-25 .item:nth-child(3),.flex-container-26 .item:nth-child(3){
            font-size: 40px;
        }
        .flex-container-25 .item:nth-child(1),.flex-container-26 .item:nth-child(1){
            font-size: 60px;
        }
        .flex-end{
            align-self: flex-end;
        }
        .order-1{
            order: 1;
        }
        .order-2{
            order: 2;
        }
        .order-3{
            order: 3;
        }
        .flex-container-28 .item:nth-child(2){
            flex-grow: 1;
        }
        .flex-container-28 .item:nth-child(3){
            flex-grow: 2;
        }
    </style>
</head>
<body>
    <div class="flex-container-1">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
    </div>
    <h3>flex-direcion:row;</h3>
    <div class="flex-container-2">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>flex-direcion:row-reverse;</h3>
    <div class="flex-container-3">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>flex-direcion:column;</h3>
    <div class="flex-container-4">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>flex-direcion:column-reverse;</h3>
    <div class="flex-container-5">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>flex-wrap:wrap</h3>
    <div class="flex-container-6">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
    </div>
    <h3>flex-wrap:wrap-reverse</h3>
    <div class="flex-container-7">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
    </div>
    <h3>justify-content:flex-start</h3>
    <div class="flex-container-8">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>justify-content:flex-start;flex-firection:row-reverse</h3>
    <div class="flex-container-9">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>justify-content:flex-end;</h3>
    <div class="flex-container-10">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>justify-content:flex-end;flex-firection:row-reverse</h3>
    <div class="flex-container-11">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>justify-content:center;</h3>
    <div class="flex-container-12">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>justify-content:space-between;</h3>
    <div class="flex-container-13">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>justify-content:space-around;</h3>
    <div class="flex-container-14">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>justify-content:space-evenly;</h3>
    <div class="flex-container-15">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>aling-content:flex-end;flex-wrap:wrap</h3>
    <div class="flex-container-16">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
        <div class="item">8</div>
    </div>
    <h3>aling-content:flex-end;flex-wrap:wrap-reverse</h3>
    <div class="flex-container-17">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
        <div class="item">8</div>
    </div>
    <h3>aling-content:center;flex-wrap:wrap</h3>
    <div class="flex-container-18">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
        <div class="item">8</div>
    </div>
    <h3>aling-content:stretch;flex-wrap:wrap</h3>
    <div class="flex-container-19">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
        <div class="item">8</div>
    </div>
    <h3>aling-content:space-between;flex-wrap:wrap</h3>
    <div class="flex-container-20">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
        <div class="item">8</div>
    </div>
    <h3>aling-content:space-around;flex-wrap:wrap</h3>
    <div class="flex-container-21">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
        <div class="item">8</div>
    </div>
    <h3>aling-items:flex-end</h3>
    <div class="flex-container-22">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>aling-items:center</h3>
    <div class="flex-container-23">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>aling-items:stretch</h3>
    <div class="flex-container-24">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>aling-items:baseline</h3>
    <div class="flex-container-25">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
    <h3>aling-self:flex-end</h3>
    <div class="flex-container-26">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item flex-end">3</div>
    </div>
    <h3>order</h3>
    <div class="flex-container-27">
        <div class="item order-2">1</div>
        <div class="item order-3">2</div>
        <div class="item order-1">3</div>
    </div>
    <h3>flex-grow:1</h3>
    <div class="flex-container-28">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
    </div>
</body>
</html>