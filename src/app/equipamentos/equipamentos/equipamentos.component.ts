import {AfterViewInit, Component, ViewChild} from '@angular/core';
import {MatPaginator} from '@angular/material/paginator';
import {MatTableDataSource} from '@angular/material/table';

@Component({
  selector: 'app-equipamentos',
  templateUrl: './equipamentos.component.html',
  styleUrls: ['./equipamentos.component.css']
})
export class EquipamentosComponent {
  title = 'dados-de-equipamentos';
  displayedColumns: string[] = ['id', 'numeroSerie', 'fabricante', 'tipoEquipamento', 
  'subestacao', 'dataOperacao', 'nivelTensao', 'statusEquipamento', 'observacoes', 'acao'];
  dataSource = new MatTableDataSource<Equipamentos>(ELEMENT_DATA);

  @ViewChild(MatPaginator) paginator!: MatPaginator;
  

  ngAfterViewInit() {
    this.dataSource.paginator = this.paginator;
  }

}

export interface Equipamentos {
  id: number;
  numeroSerie: string;
  fabricante: string;
  tipoEquipamento: string;
  subestacao: string;
  dataOperacao: string;
  nivelTensao: number;
  statusEquipamento: string;
  observacoes: string;
}
const ELEMENT_DATA: Equipamentos[] = [
  {id: 1, numeroSerie: 'REA001', fabricante: 'SIEMENS', tipoEquipamento: 'Reator', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 2, numeroSerie: 'REA002', fabricante: 'SIEMENS', tipoEquipamento: 'Reator', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 3, numeroSerie: 'TRA001', fabricante: 'GE', tipoEquipamento: 'Transformador', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 4, numeroSerie: 'TRA002',fabricante: 'GE', tipoEquipamento: 'Transformador', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 230, statusEquipamento: 'ativo', observacoes: ''},
  {id: 5, numeroSerie: 'TRA003',fabricante: 'GE',tipoEquipamento: 'Transformador', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 230, statusEquipamento: 'ativo', observacoes: ''},
  {id: 6, numeroSerie: 'TRA004', fabricante: 'GE',tipoEquipamento: 'Transformador', subestacao: 'Samambaia', dataOperacao: '01/01/2000', nivelTensao: 230, statusEquipamento: 'ativo', observacoes: ''},
  {id: 7, numeroSerie: 'TRA005', fabricante: 'GE', tipoEquipamento: 'Transformador', subestacao: 'Samambaia', dataOperacao: '01/01/2000', nivelTensao: 230, statusEquipamento: 'ativo', observacoes: ''},
  {id: 8, numeroSerie: 'TRA006', fabricante: 'GE', tipoEquipamento: 'Transformador', subestacao: 'Samambaia', dataOperacao: '01/01/2000', nivelTensao: 230, statusEquipamento: 'ativo', observacoes: ''},
  {id: 9, numeroSerie: 'TRA007', fabricante: 'GE', tipoEquipamento: 'Transformador', subestacao: 'Samambaia', dataOperacao: '01/01/2000', nivelTensao: 230, statusEquipamento: 'ativo', observacoes: ''},
  {id: 10, numeroSerie: 'TRA008', fabricante: 'GE', tipoEquipamento: 'Transformador', subestacao: 'Samambaia', dataOperacao: '01/01/2000', nivelTensao: 230, statusEquipamento: 'ativo', observacoes: ''},
  {id: 11, numeroSerie: 'REA003', fabricante: 'SIEMENS', tipoEquipamento: 'Reator', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 12, numeroSerie: 'SEC001', fabricante: 'ABB', tipoEquipamento: 'Seccionadora', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 13, numeroSerie: 'SEC002', fabricante: 'ABB', tipoEquipamento: 'Seccionadora', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 14, numeroSerie: 'SEC003', fabricante: 'ABB', tipoEquipamento: 'Seccionadora', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 15, numeroSerie: 'SEC004', fabricante: 'ABB', tipoEquipamento: 'Seccionadora', subestacao: 'Assis', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 16, numeroSerie: 'SEC005', fabricante: 'ABB', tipoEquipamento: 'Seccionadora', subestacao: 'Assis', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 17, numeroSerie: 'SEC006', fabricante: 'ABB', tipoEquipamento: 'Seccionadora', subestacao: 'Assis',dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 18, numeroSerie: 'DIS001',fabricante: 'ABB', tipoEquipamento: 'Disjuntor', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 19, numeroSerie: 'DIS002',fabricante: 'ABB',tipoEquipamento: 'Disjuntor', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
  {id: 20, numeroSerie: 'DIS003', fabricante: 'ABB',tipoEquipamento: 'Disjuntor', subestacao: 'Colinas', dataOperacao: '01/01/2000', nivelTensao: 500, statusEquipamento: 'ativo', observacoes: ''},
];



