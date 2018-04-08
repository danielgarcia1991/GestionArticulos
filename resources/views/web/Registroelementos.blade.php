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
                  <h2 > Gestion categorias </h2>
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
                 <a href="javascript:history.back()" class="btn"> Volver Atrás</a>
                <div class="owl-carousel">
                  <div class="item">
                    <blockquote class="box">
                      <div class="box_aside"><img src="" alt=""></div>
                      <div class="box_cnt__no-flow">                    
                                                  
                      </div>
                    </blockquote>
                  </div>
                  
                </div>
              </div>


              <div class="grid_9">
                <h2>Categorias</h2><img src="" alt="">
                
                <table>
                  <tr bgcolor="#C9C9C9">
                    <td>Nombre</td><td>Descripción</td><td colspan="3">&nbsp;</td>
                  </tr>

                @foreach($list as $categories)
                  <tr>
                    <td>{{ $categories->name }}</td>
                    <td><p>{{ $categories->description }}</p></td>
                    <td><div align="center"><a href="{{url('buscarcategorias', ['id' => $categories->id ])}}" 
                    class="btn btn-primary">Ver detalle</a></div>
                    </td>
                    <td><div align="center"><a href="{{url('editarcategorias', ['id' => $categories->id ])}}" 
                    class="btn btn-primary">Editar</a></div>
                    </td>

                    <td><div align="center"><a href="{{url('eliminarcategoria', ['id' => $categories->id ])}}" 
                    class="btn btn-danger">Eliminar</a></div>
                    </td>


                  </tr>
                @endforeach
                <tr>
                    <td colspan="4">&nbsp;</td>
                    <td>
                      <div align="center">
                      <a href="{!! url("/agregarcategorias") !!}" class="btn btn-primary">Agregar</a>
                      </div>
                    </td>
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
      
      
      
       <!--
      <a href="javascript:history.back()"><img src="images/boton.jpg" height="33" width="100" alt="Botón"</a>
            -->
            <!--<input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
            -->
              
    </div>
    

@endsection