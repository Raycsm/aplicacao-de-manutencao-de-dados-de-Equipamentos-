import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {TableEquipamentosComponent} from './equipamentos/table-equipamentos/table-equipamentos.component'
import { FormEquipamentosComponent } from './equipamentos/form-equipamentos/form-equipamentos.component';
import { EditEquipamentosComponent } from './equipamentos/edit-equipamentos/edit-equipamentos.component';

const routes: Routes = [
  { path: '', redirectTo: 'equipamentos', pathMatch: 'full' },
  { path: 'tabela-equipamentos', component:TableEquipamentosComponent },
  { path: 'cadastrar-equipamento', component: FormEquipamentosComponent },
  { path: 'editar-equipamento', component: EditEquipamentosComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
