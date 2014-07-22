 
	 <div class="row">
	 	
	 	<div class="col-md-12">
	 		<hr>
	 		<p class="text-center">
	 			
	 			Clase programación web. <br> examen 3<span class="glyphicon glyphicon-registration-mark"> </span> <?php echo date('Y'); ?>
	 			
	 		</p>
	 	</div>	
	 	
	 </div>

 </div> <!-- /container -->
 
 <script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../source/jquery.fancybox.pack.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/validaclient.js"></script>
<script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="../js/moment.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    	//Status
    	$('#id_form_status').bootstrapValidator({
      fields:{//abre fields
        status: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The status is required and cannot be empty'
                    
                  }
              }
          }
      }
    });
   //fin status

   //autor
   $('#id_form_aa').bootstrapValidator({
      fields:{//abre fields
        nombre: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The status is required and cannot be empty'
                    
                  },
                  stringLength: {
                        min: 1,
                        max: 2,
                        message: 'The name de la posicion must be more than 1 and less than 2 characters long'
                    }
              }
          },
          apellidos: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The apellidos is required and cannot be empty'
                    }
                  }
                },
                email: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    }
                  }
                }
      }//fin de fields
    });
   //fin autor 
   
   //indice
   $('#id_form_indice').bootstrapValidator({
      fields:{//abre fields
        titulo: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The titulo is required and cannot be empty'
                    
                  }
              }
          },
          numero: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The numero is required and cannot be empty'
                    }
                  }
                }
      }//fin de fields
    });
   //fin indice
   
   //autor
   $('#id_form_autor').bootstrapValidator({
      fields:{//abre fields
        nombre: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The status is required and cannot be empty'
                    
                  },
                  stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The name de la posicion must be more than 6 and less than 30 characters long'
                    }
              }
          },
          apellidos: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The apellidos is required and cannot be empty'
                    }
                  }
                },
                email: {
                validators: {
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    }
                }
            }
      }//fin de fields
    });
   //fin autor

    //Todos los forms
    $('.ifancyboX').fancybox({
         'width' : '75%',
         'height' : '75%',
         'autoScale' : false,
         'transitionIn' : 'none',
         'transitionOut' : 'none',
         'type' : 'iframe'
     });
     //fin de fancyboX

     //revista
     $('#id_form_revista').bootstrapValidator({
      fields:{//abre fields
        nombre: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The nombre is required and cannot be empty'
                    
                  },
                  stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The nombre must be more than 6 and less than 30 characters long'
                    }
              }
          },
          portada: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The portada is required and cannot be empty'
                    }
                  }
                },
                /*fecha: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The fecha is required and cannot be empty'
                    }
                  }
                },*/
                volumen: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The volumen is required and cannot be empty'
                    }
                  }
                },
                titulo: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The titulo is required and cannot be empty'
                    }
                  }
                },
                subtitulo: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The subtitulo is required and cannot be empty'
                    }
                  }
                },
                numero: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The numero is required and cannot be empty'
                    }
                  }
                },
                clave: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The clave is required and cannot be empty'
                    }
                  }
                },
                directorio: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The directorio is required and cannot be empty'
                    }
                  }
                },
                editorial: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The editorial is required and cannot be empty'
                    }
                  }
                }
      }//fin de fields
    });
     //fin de revista

     //datetimepicker revista
     $('#datetimepicker_revista').datetimepicker({
        language:'es'
    });
     //fin de datetimepicker revista

     //datepicker articulo
     $('#datetimepicker_articulo').datetimepicker({
        language:'es'
    });
     //fin de datepicker articulo

     //articulo
     $('#id_form_articulo').bootstrapValidator({
      fields:{//abre fields
        nombre: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The nombre is required and cannot be empty'
                    
                  },
                  stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The nombre must be more than 6 and less than 30 characters long'
                    }
              }
          },
          resumen: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The resumen is required and cannot be empty'
                    }
                  }
                },
                abstract: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The abstract is required and cannot be empty'
                    }
                  }
                },
                introduccion: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The introduccion is required and cannot be empty'
                    }
                  }
                },
                metodologia: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The metodologia is required and cannot be empty'
                    }
                  }
                },
                contenido: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The contenido is required and cannot be empty'
                    }
                  }
                },
                fecha_creacion: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The fecha de creacion is required and cannot be empty'
                    }
                  }
                },
                archivo_pdf: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The archivo PDF is required and cannot be empty'
                    }
                  }
                },
                conclusiones: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The conclusiones is required and cannot be empty'
                    }
                  }
                },
                agradecimientos: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The agradecimientos is required and cannot be empty'
                    }
                  }
                },
                referencias: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The referencias is required and cannot be empty'
                    }
                  }
                }
      }//fin de fields
    });
     //fin de articulo


     //articulo_autor
   $('#id_form_articulo_autor').bootstrapValidator({
      fields:{//abre fields
        id_articulo: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The status is required and cannot be empty'
                    
                  }
              }
          },
          id_autor: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The apellidos is required and cannot be empty'
                    }
                  }
                }
      }//fin de fields
    });
   //fin articulo_autor

   //indice_articulo
   $('#id_form_indice_articulo').bootstrapValidator({
      fields:{//abre fields
        id_indice: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The id_indice is required and cannot be empty'
                    
                  }
              }
          },
          id_articulo: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The id_articulo is required and cannot be empty'
                    }
                  }
                },
          numero: {
                //message: 'The nombre is not valid',
                validators: {
                    notEmpty: {
                        message: 'The campo numero is required and cannot be empty'
                    }
                  }
                }

      }//fin de fields
    });
   //fin indice_articulo


     //Todos los forms
    $('#verCopa').fancybox({
         'width' : '75%',
         'height' : '75%',
         'autoScale' : false,
         'transitionIn' : 'elastic',
         'transitionOut' : 'elastic',
         'type' : 'iframe'
     });
     //fin de fancyboX


});
</script>
    
    

  </body>
</html>