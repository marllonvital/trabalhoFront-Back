import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { MaterializeModule } from 'angular2-materialize';
import { AppComponent } from './app.component';
import { NavbarComponent } from './navbar/navbar.component';
import { HomeComponent } from './pages/home/home.component';
import { ContatoComponent } from './pages/contato/contato.component';
import { SobreNosComponent } from './pages/sobre-nos/sobre-nos.component';
import { ProjetosComponent } from './pages/projetos/projetos.component';
import { AppRoutingModule } from './app.routing.module';
import { FooterComponent } from './footer/footer.component';

import { FormsModule } from '@angular/forms';


@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    ContatoComponent,
    SobreNosComponent,
    ProjetosComponent,
    HomeComponent,
    FooterComponent
  ],
  imports: [
    BrowserModule,
    MaterializeModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
