import { Injectable } from '@angular/core';
import { Equipamentos } from './equipamento';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  base_url = "http://localhost/equipamentos_db";

	constructor(private httpClient: HttpClient) {}

	getEquipamentos(): Observable<Equipamentos[]>{

		return this.httpClient.get<Equipamentos[]>(`${this.base_url}/read.php`);
	}

  getEquipamento(): Observable<Equipamentos[]>{

		return this.httpClient.get<Equipamentos[]>(`${this.base_url}/read.php`,);
	}


	createEquipamentos(Equipamentos: Equipamentos): Observable<Equipamentos>{

		return this.httpClient.post<Equipamentos>(`${this.base_url}/create.php`, Equipamentos);
	}

	updateEquipamentos(Equipamentos: Equipamentos){

		return this.httpClient.put<Equipamentos>(`${this.base_url}/update.php`, Equipamentos);
	}

	deleteEquipamentos(id: number){

		return this.httpClient.delete<Equipamentos>(`${this.base_url}/delete.php/?id=${id}`);
	}


}


