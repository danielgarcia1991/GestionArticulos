@extends('layout.home')

@section('content')

      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
      <main>
        <section class="camera_container">
          
        <section class="well1">
          <div class="container">
            <div class="row">
              
              <div class="grid_3">
                <div class="info-box">
                  <a href="javascript:history.back()" class="btn"> Volver Atrás</a>
                  <hr>
                  <h3>Gestion de articulos</h3>
                  <dl>
                    <dt></dt>
                    <dd></dd>
                  </dl>
                  <dl>
                    <dt></dt>
                    <dd></dd>
                  </dl>
                  <dl>
                    <dt></dt>
                    <dd></dd>
                  </dl>
                  
                  <h3></h3>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>
                  <dl>
                    <dt></dt>
                  </dl>

                </div>
                <div class="owl-carousel">
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>uno</q>
                        </p>
                        <cite><a href="#"></a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>dos</q>
                        </p>
                        <cite><a href="#"></a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>tres</q>
                        </p>
                        <cite><a href="#"></a></cite>
                      </div>
                    </blockquote>
                  </div>
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="" alt=""></div>
                      <div class="box_cnt__no-flow">
                        <p>
                          <q>cuatro</q>
                        </p>
                        <cite><a href="#"></a></cite>
                      </div>
                    </blockquote>
                  </div>
                  
                </div>
              </div>


              <div class="grid_9">

              <h1>Ver Articulos</h1>
             
              <hr>
              @if($errors->any())
              <div class="alert alert-danger">
              @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
              @endforeach
              </div>
              @endif
              
              
              <table>
                <tr>
                  <td>Nombre:</td><td>{{ $data->name }}</td>
                </tr>
                <tr>
                  <td>Descripción:</td><td>{{ $data->description }}</td>
                </tr>
                <tr>
                  <td>Categoria:</td><td>{{ $data->Category->name }}</td>
                </tr>
                <tr>
                  <td>Fecha de Expiración:</td><td>{{ $data->date_expiration }}</td>
                </tr>
                <tr>
                  <td>Kilometraje:</td><td>{{ $data->mileage }}</td>
                </tr>
                <tr>
                  <td>Fecha Creación:</td><td>{{ $data->created_at }}</td>
                </tr>
                <tr>
                  <td>Fecha Ultima Modificación:</td><td>{{ $data->updated_at }}</td>
                </tr>

              </table>
                
                
              </div> 
            </div>
            
          </div>
        </section>
      </main>
      <!--
      ========================================================
                                  FOOTER
      ========================================================
      -->
      
    </div>
    

@endsection