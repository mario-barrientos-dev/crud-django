from django.db import models
from django.urls import reverse
import uuid
# Create your models here.
class Genero(models.Model):
    Name=models.CharField(max_length=64, help_text="Pon el genero aqui: ")
    
    def __str__(self):
        return self.Name
    
class Pelicula(models.Model):
    titulo=models.CharField(max_length=32)
    autor=models.ForeignKey('Autor', on_delete=models.SET_NULL, null=True)
    resume=models.TextField(max_length=300, help_text='Pon aqui de que va la pelicula')
    isan=models.CharField('ISAN', max_length=23, help_text='pon aqui el ISAN de la pelicula')
    genero=models.ManyToManyField(Genero)
    
    
    def __str__(self):
        return self.titulo
    
    def get_absolute_url(self):
        return reverse("pelicula-detail", args=[str(self.id)])

class peliculaInstance(models.Model):
    id=models.UUIDField(primary_key=True, default=uuid.uuid4, help_text="ID unico para este libro")
    pelicula=models.ForeignKey('Pelicula', on_delete=models.SET_NULL, null=True)
    imprint=models.CharField(max_length=200)
    due_back=models.DateField(null=True, blank=True)
    
    LOAN_STATUS = (
        ('m', 'mantenimient'),
        ('o', 'on loan'),
        ('a', 'avalaible'),
        ('r', 'reserverd'),     
    )
    status=models.CharField(max_length=1, choices=LOAN_STATUS, blank=True, default='m', help_text='estado de la pelicula')
    
    class Meta:
        ordering=['due_back']

    def __str__(self):
        return '%s (%s)' % (self.id, self.pelicula.titulo)

class Autor(models.Model):
    first_name=models.CharField(max_length=100)
    second_name=models.CharField(max_length=100)
    date_of_birth=models.DateField(null=True, blank=True)
    date_of_dead=models.DateField('Died', null=True, blank=True)
    
    def get_absolute_url(self):
        return reverse("Autor-detail", args=[str(self.id)])
    
    def __str__(self):
        return '%s (%s)' % (self.second_name, self.first_name)