import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
    {path: '', pathMatch: 'full', redirectTo: 'equipamentos'},
    {
      path: 'equipamentos',
      loadChildren: () => import('./equipamentos/equipamentos.module').then(m =>m.EquipamentosModule)
    }
  
  ];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
