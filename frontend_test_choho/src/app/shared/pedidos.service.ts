import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';


export class Pedido {
  fecha_pedido!:String;
  prefijo!:String;
  num_pedido!:String;
  nit!:String;
  razon_social!:String;
  vendedor!:String;
  departamento!:String;
  ciudad!:String
}


@Injectable({
  providedIn: 'root',
})
export class PedidosService {
  constructor(private http: HttpClient) {}

  
  crearPedido(pedido: Pedido): Observable<any> {
    return this.http.post('http://127.0.0.1:8000/api/pedidos/crear', pedido);
  }

}
