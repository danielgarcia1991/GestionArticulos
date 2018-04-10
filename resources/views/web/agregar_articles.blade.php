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


                
                <h1>Agregar un nuevo Articulo</h1>
                
                <hr>

                @if($errors->any())
                  
                @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                    <p><h6>{{ $error }}</h6></p>
                  </div>
                  <br>
                @endforeach   
                @endif

                {!! Form::open(['url' => 'insertar_articulos', 'method' => 'post']) !!}

                <table>
                  <tr>
                    <td>{!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}</td>
                    <td>{!! Form::text('name', null, ['class' => 'form-control']) !!}</td>
                    <td>{!! Form::label('description', 'Descripcion', ['class' => 'control-label']) !!}</td>
                    <td>{!! Form::text('description', null, ['class' => 'form-control']) !!}</td>
                  </tr>
                  <tr>
                  <td>Tipo</td>
                  <td colspan="3">
                      <select name="type" id="type" onchange="changeFunc();">
                            <option value=""></option>
                            <option value="Fecha">Fecha</option>
                            <option value="Kilometraje">Kilometraje</option>
                      </select>
                    </td>
                    </tr>
                  <tr>
                    
                      <td>
                        <div id="divNameDate" style="display:none;">
                          {!! Form::label('date_expiration', 'Fecha de Expiración (YYYY-mm-dd)', ['class' => 'control-label']) !!}
                        </div>
                      </td>
                    <td>
                      <div id="divDate" style="display:none;">
                        {!! Form::text('date_expiration', null, ['class' => 'form-control']) !!}
                      </div>
                    </td>
                    
                    <td>
                      <div id="divNameMileage" style="display:none;">
                        {!! Form::label('mileage', 'Kilometraje', ['class' => 'control-label']) !!}
                        </div>
                    </td>
                      
                    <td>
                      <div id="divMileage" style="display:none;">
                        {!! Form::text('mileage', null, ['class' => 'form-control']) !!}
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>{!! Form::label('category', 'Categoria', ['class' => 'control-label']) !!}</td>
                    
                    <td>
                      <select name="category_id" id="category_id">
                          @foreach($list as $categories)
                            <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                            @endforeach
                      </select>
                    </td>
                  </tr>
                  
                  @if ($type_user === 'administrator')
                    <tr>
                      <td>Usuario:</td>
                      <td>
                        <select name="user_id" id="user_id">
                            @foreach($list_user as $users)
                              <option value="{{ $users->id }}">{{ $users->name }}</option>
                              @endforeach
                        </select>
                      </td>
                    </tr>
                  @else
                    <?php echo Form::hidden('user_id', $user_id);?>
                  @endif

                  <tr>
                    <td colspan="4">   
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