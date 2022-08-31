from django.shortcuts import render

# Create your views here.

from .models import Autor, peliculaInstance, Pelicula, Genero

def index(request):
    num_peliculas=Pelicula.objects.all().count()
    num_instacias=peliculaInstance.objects.all().count()
    num_autor=Autor.objects.all().count()
    disponibles=peliculaInstance.objects.filter(status__exact='a').count()
    
    return render(
        request, 
        'index.html',
        context={
            'num_peliculas': num_peliculas,
            'num_autor': num_autor,
            'num_instancias': num_instacias,
            'disponibles': disponibles
        }
    )
    
    