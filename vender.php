<?php
include 'model/conexion.php';
$sentencia = $bd->query('select * from usuarios');
$vehiculo = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel= "css/estilos.css">
    <title>Tienda de Vehículos</title>
  </head>
  <body>
    <!-- inicio menú -->
    <?php include 'maqueta/menu.php' ?>
    
    <div class=" container box gradient-white-gray shadow">
      
    <div class="card" style="width: 18rem;">
  
              <div class="card-body">
                <h5 class="card-title">Tasación gratuita. Introduce los datos de tu vehiculo</h5>
                <p class="card-text">MARCA</p>

                <div class="select-error-wrapper">
                            <div class="container" >
                              <select data-qa-selector="step-marke" class="active focus"><option disabled="" 
                              value="0">Seleccionar marca</option>
                                
                                <option >Alfa Romeo</option>
                                <option >Alpina</option>
                                <option >Aston Martin</option>
                                <option >Audi</option>
                                <option >BMW</option>
                                <option >Cadillac</option>
                                <option >Chevrolet</option>
                                <option >Chrysler</option>
                                <option >Citroen</option>
                                <option >Cupra</option>
                                <option >Fiat</option>
                                <option >Ford</option><option value="340">Honda</option>
                                <option >Hyundai</option>
                                </option>
                              </select>
                            </div>
                          </div>
                          
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
    </div>
          
            <div class="container">             
                
                 <span class="hidden-xs hidden-ms ">Tasación gratuita. Introduce los datos de tu vehiculo</span>
                  
               <div class=" row ">
                 
                  <form class="form-horizontal col-xs-12">
                          <span>Marca</span></label>

                   <div class="select-error-wrapper">
                            <div class="container" >
                              <select data-qa-selector="step-marke" class="active focus"><option disabled="" 
                              value="0">Seleccionar marca</option>
                                
                                <option >Alfa Romeo</option>
                                <option >Alpina</option>
                                <option >Aston Martin</option>
                                <option >Audi</option>
                                <option >BMW</option>
                                <option >Cadillac</option>
                                <option >Chevrolet</option>
                                <option >Chrysler</option>
                                <option >Citroen</option>
                                <option >Cupra</option>
                                <option >Fiat</option>
                                <option >Ford</option><option value="340">Honda</option>
                                <option >Hyundai</option>
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="step-select-row no-errors   field-model">
                          <label class="select-label">
                            <span>Modelo</span>
                          </label>
                          <div class="select-error-wrapper">
                            <div class="disabled select-wrapper">
                              <select data-qa-selector="step-modell" class="disabled" disabled="">
                                <option disabled="" value="0">Seleccionar modelo</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="step-select-row no-errors   field-year">
                          <label class="select-label">
                            <span>Matriculación</span>
                          </label>
                          <div class="select-error-wrapper">
                            <div class="disabled select-wrapper">
                              <select data-qa-selector="step-builtDates" class="disabled" disabled="">
                                <option disabled="" value="0">Seleccionar año matriculación</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="submit-button-row">
                        <div class="submit-button-wrapper">
                          <button class="submit-button" type="submit" data-qa-selector="step-submit">
                            <span class="submit-button-text">Obtener tasación</span>
                            <i class="submit-button-icon"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

    <?php include 'maqueta/footer.php' ?>