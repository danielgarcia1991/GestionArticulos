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
                  <h3>Gestión de articulos</h3>
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
                          <q>cuatro</q>
                        </p>
                        <cite><a href="#"></a></cite>
                      </div>
                    </blockquote>
                  </div>
                  
                </div>
              </div>


              <div class="grid_9">
                <h2>Articulos</h2><img src="" alt="">
                
                <table>
                  <tr bgcolor="#C9C9C9">
                    <td>Articulo</td>
                    <td>Categoria</td>
                    <td>Descripción</td>
                    <td colspan="3">&nbsp;</td>
                   
                  </tr>
                  @foreach($list as $articles)
                  
                    <tr>
                      <td>{{ $articles->name }}</td>
                      <td><p>{{ $articles->Category->name }}</p></td>
                      <td>{{ $articles->description }}</td>
                      <td><a href="{{url('buscararticulos', ['id' => $articles->id ])}}" 
                    class="btn btn-primary">Ver detalle</a>
                    </td>
                      <td><a href="{{url('editararticulos', ['id' => $articles->id ])}}" 
                    class="btn btn-primary">Editar</a></td>
                    
                      
                    <td><div align="center"><a href="#" 
                    parametro="/eliminararticulo/{{ $articles->id }}" 
                    class="btn btn-danger elimArticulo">Eliminar</a></div>
                    </td>

                    </tr>
                  @endforeach

                  <tr>
                    <td colspan="6">
                      <div align="right">
                        <a href="{!! url("/agregararticulos") !!}" class="btn btn-primary">Agregar</a>
                      </div>
                    </td>
                  </tr>
                </table>
                
            
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