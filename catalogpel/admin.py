from django.contrib import admin

# Register your models here.
from .models import Pelicula, Autor, Genero, peliculaInstance

admin.site.register(Pelicula)
admin.site.register(Autor)
admin.site.register(Genero)
admin.site.register(peliculaInstance)
