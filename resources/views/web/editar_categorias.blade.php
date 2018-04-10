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
                  <h2 >Atras</h2>
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

              <h1>Editar Categorias</h1>
             
              <hr>
              @if($errors->any())
              <div class="alert alert-danger">
              @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
              @endforeach
              </div>
              @endif
              
              
              {!! Form::open(['url' => ['editar_categorias',$data->id], 'method' => 'PUT']) !!}
              <table>
                <tr>
                  <td>Nombre:</td><td><?php echo Form::text('name', $data->name);?></td>
                </tr>
                <tr>
                  <td>Descripción:</td><td><?php echo Form::text('description', $data->description);?></td>
                </tr>

                @if ($type_user === 'administrator')
                    <tr>
                      <td>Usuario:</td>
                      <td>
                      <select name="user_id" id="user_id">
                          <option value="{{ $data->User->id }}">{{ $data->User->name }}</option>
                          @foreach($list_users as $users)
                            <option value="{{ $users->id }}">{{ $users->name }}</option>
                            @endforeach
                      </select>
                      </td>
                    </tr>
                  @else
                    
                  @endif


                <tr>
                    <td colspan="4">   
                    <div align="right">
                      {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
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
      
    </div>
    

@endsection