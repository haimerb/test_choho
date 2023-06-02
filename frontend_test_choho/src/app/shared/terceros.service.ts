import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';



export class Tercero {
  nit!:String;
  razon_social!:String;
  num_pedido!:String;
  ciuu!:String;
  activo!:String;  
}


@Injectable({
  providedIn: 'root',
})
export class TercerosService {
  constructor(private http: HttpClient) {}

  
  crearTercero(tercero: Tercero): Observable<any> {
    return this.http.post('http://127.0.0.1:8000/api/tercero/crear', tercero);
  }

}
