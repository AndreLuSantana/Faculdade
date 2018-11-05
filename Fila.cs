using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Portifolio_Fila
{
    class Fila
    {
        private string[] nomeCliente;
        private string[] descricaoServiço;
        private string[] carro;
        private int fim;

        public Fila(int n)
        {
            if(n > 0)
            {
                nomeCliente = new string[n];
                descricaoServiço = new string[n];
                carro = new string[n];
                fim = -1;
            }
        }
        public void insert(string tmpNomeDoCliente, string tmpDescricaoServico, string tmpCarro)
        {
            if (fim < nomeCliente.Length - 1)
            {
                fim++;
                nomeCliente[fim] = tmpNomeDoCliente;
                descricaoServiço[fim] = tmpDescricaoServico;
                carro[fim] = tmpCarro;
            }
        } 

        public string concluir()
        {
            string NomeDoCliente = " ";

            if (fim >= 0)
                {
                    NomeDoCliente = nomeCliente[0];
                    for (int i = 0; i < nomeCliente.Length - 1; i++)
                    {
                        nomeCliente[i] = nomeCliente[i + 1];
                        
                    }
                    fim--;
            }
            return NomeDoCliente;
        }
         public string mostrar()
         {
            string msg = "";
            for (int i = 0; i <= fim; i++)
            {
             msg = msg + nomeCliente[i] + " - " + descricaoServiço[i] + " - " + carro[i] + "\n";         
            }
            return msg;
         }
        
    }
}
