import { Equipamentos } from '../../equipamento';
import { ApiService } from 'src/app/api.service';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-form-equipamentos',
  templateUrl: './form-equipamentos.component.html',
  styleUrls: ['./form-equipamentos.component.scss']
})
export class FormEquipamentosComponent implements OnInit {

  Equipamentos: Equipamentos = new Equipamentos();
  submitted = false;

  constructor(private ApiService: ApiService,
    private router: Router) { }

  ngOnInit() {
  }

  newUser(): void {
    this.submitted = false;
    this.Equipamentos = new Equipamentos();
  }

  save() {
    this.ApiService
    .createEquipamentos(this.Equipamentos).subscribe(
      data => { console.log(data)
      this.Equipamentos = new Equipamentos();
      this.gotoTable();
      },
    error => console.log(error));
  }

  onSubmit() {
    this.submitted = true;
    this.save();
  }

  gotoTable() {
    this.router.navigate(['/tabela-equipamentos']);
  }
}
