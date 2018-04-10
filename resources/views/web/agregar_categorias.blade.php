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


                
                <h1>Agregar una nueva categoria</h1>
                
                <hr>

                @if($errors->any())
                  
                @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                    <p><h6>{{ $error }}</h6></p>
                  </div>
                  <br>
                @endforeach   
                @endif

                {!! Form::open(['url' => 'insertar_categorias', 'method' => 'post']) !!}

                <table>
                <tr><td><?php echo $type_user;?></td></tr>
                  <tr>
                    <td>{!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}</td>
                    <td>{!! Form::text('name', null, ['class' => 'form-control']) !!}</td>
                  </tr>
                  <tr>
                    <td>{!! Form::label('description', 'Descripcion', ['class' => 'control-label']) !!}</td>
                    <td>{!! Form::text('description', null, ['class' => 'form-control']) !!}</td>
                  </tr>
                  @if ($type_user === 'administrator')
                    <tr>
                      <td>Usuario:</td>
                      <td>
                        <select name="user_id" id="user_id">
                            @foreach($list as $users)
                              <option value="{{ $users->id }}">{{ $users->name }}</option>
                              @endforeach
                        </select>
                      </td>
                    </tr>
                  @else
                    <?php echo Form::hidden('user_id', $user_id);?>
                  @endif
                  <tr>
                    <td colspan="2">   
                    <div align="right">
                      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                    </div>
                    </td>
                  </tr>
                  
                  
                </table>

                
                {!! Form::close() !!}

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