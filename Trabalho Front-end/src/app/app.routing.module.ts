import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { NavbarComponent } from './navbar/navbar.component';
import { HomeComponent } from './pages/home/home.component';
import { ContatoComponent } from './pages/contato/contato.component';
import { SobreNosComponent } from './pages/sobre-nos/sobre-nos.component';
import { ProjetosComponent } from './pages/projetos/projetos.component';


const appRoutes: Routes = [
  { path: 'home', component: HomeComponent },
  { path: '', redirectTo: '/home', pathMatch: 'full' },
  { path: 'contato', component: ContatoComponent },
  { path: 'sobre-nos', component: SobreNosComponent },
  { path: 'projetos', component: ProjetosComponent },


];

@NgModule({
  imports: [RouterModule.forRoot(appRoutes)],
  exports: [RouterModule]
})
export class AppRoutingModule {

}
