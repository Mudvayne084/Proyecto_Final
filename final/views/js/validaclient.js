$(document).ready(
        function() {
			
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
            
            $('#datetimepicker1').datetimepicker({
                language: 'es'
				});
				
			$(".ejemplo").fancybox({
                    'autoScale': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'width': 680,
                    'height': 450,
                    'type': 'iframe'
                });	
        					
			$('#id_autor').bootstrapValidator({//validacion continenete
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					
                fields: {//abre fields
                    
					nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo de continente obligatorio'
                            },
                            stringLength: {
                                max: 15,
                                message: 'longitud mayor a 15'
                            }
                        }
                    },
					apellidos: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            },
                            stringLength: {
                                max: 20,
                                message: 'longitud mayor a 15'
                            }
                        }
                    },
					email: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            }
                        }
                    }
                  
                }//cierra fields
            });//cierre total		
			
			
						
						
				$('#id_revista').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 50,
                                message: 'longitud mayor a 50'
                            }
                        }
                    },
                    fecha: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            }
                        }
                    },
                    volumen: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            }
                        }
                    },                    
                    titulo: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The metodologia is required and cannot be empty'
                            },
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
                        }
                    },
					subtitulo: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The metodologia is required and cannot be empty'
                            },
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
                        }
                    },
					numero: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },
							digits: {
								message: 'valor numerico'
							}
                        }
                    },
					clave: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },							
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
							
                        }
                    },
					directorio: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
							
                        }
                    },
					editorial: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
							
                        }
                    }

                }//cierra fields
            });//cierre total
			
			$('#id_articulo').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					
                fields: {//abre fields
				
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 50,
                                message: 'longitud mayor a 50'
                            }
                        }
                    },
                    resumen: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					abstrac: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					introduccion: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					metodologia: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
                    contenido: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					concluciones: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					agradecimientos: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					referencias: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					fecha_creacion: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            }
                        }
                    },				

                }//cierra fields
            });//cierre total
			
			
			
			$('#id_status').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					
                fields: {//abre fields
				
                    status: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 50,
                                message: 'longitud mayor a 50'
                            }
                        }
                    }                    			

                }//cierra fields
            });//cierre total
			


                    }
       
);
	
	