@extends('layouts.sidebar')

@section('main-content')
  <div class="my_container"> 
    <div class="container">
      <div class="row">
        <div class="col-12 my_card-1">
          <div class="circle text-center">
            Crea la tua carta!
          </div>
          <img src="https://static.wefut.com/assets/images/fut22/gold46.png?205" alt="">
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-5 my_card-2 mt-4">
          <div class="my_container_item">
            <h3>Fifa revivals</h3>
            <p>Una lista di tutte le carte che hanno lasciato il segno in fifa!</p>
          </div>
        </div>
        <div class="col-6 offset-1 my_card-3 mt-4"></div>
      </div>
    </div>
  </div> 
@endsection


<style>
  .my_card-1 {
    height: 350px;
    margin-top: 30px;
    background-image: url(https://areajugones.sport.es/wp-content/uploads/2022/06/kaka-icono-moments-sbc-fifa-22.jpg);
    background-size: contain;
    background-position: left;
    background-repeat: no-repeat;
    display: flex;
    justify-content: flex-end;
    background-color: #1f232b;
  } 
  .my_container {
    width: 80%;
    margin: 0 auto;
  }
  .my_card-2 {
    height: 300px;
    background-color: #1f232b;
    background-image: url(https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-22/new-features-and-modes/common/f22-section-top-features-bg-xl.jpg.adapt.320w.jpg);
    background-size: cover;
    background-position: bottom;
  } 
  .my_card-3 {
    height: 300px;
    background-color: #1f232b;
    background-image: url(https://komponentenpc.com/wp-content/uploads/2021/01/FIFA-21-Paulo-Dybala-Moments-SBC-Guenstigste-Loesung-Statistiken-und.jpg);
    background-size: cover;
    background-position: right;
    background-repeat: no-repeat;
  } 

  .my_container_item {
    color: #326ff8;
    padding-left: 20px;
    padding-top: 30%;
    width: 80%;
  }
  .my_container_item p {
    color: black;
  }

  .circle {
    height: 70px;
    width: 70px;
    background-color: #369fa2;
    border-radius: 50%;
    position: relative;
    left: 70px;
    display: flex;
    align-items: center;
    color: white;
  }
</style>