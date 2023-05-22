import { Component } from '@angular/core';
import { Equipamentos } from '../../equipamento';
import { ApiService } from 'src/app/api.service';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-edit-equipamentos',
  templateUrl: './edit-equipamentos.component.html',
  styleUrls: ['./edit-equipamentos.component.scss']
})
export class EditEquipamentosComponent {

  id!: number;
  Equipamentos!: Equipamentos;

  constructor(private route: ActivatedRoute, private router: Router,
    private userService: ApiService) { }

  ngOnInit() {
    this.Equipamentos = new Equipamentos();

    this.id = this.route.snapshot.params['id'];

    this.userService.getEquipamento()

  }

  updateUser() {
    this.userService.updateEquipamentos(this.Equipamentos)
      .subscribe(data => {
        console.log("Alterado com sucesso", data);
        this.Equipamentos = new Equipamentos();
        this.gotoTable();
      }, error => console.log(error));
  }

  onSubmit() {
    this.updateUser();
  }

  gotoTable() {
    this.router.navigate(['/tabela-equipamentos']);
  }

}
