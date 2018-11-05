using System;

namespace Portifolio_Fila
{
    class Program
    {
        static void Main(string[] args)
        {
            

            Fila fila = new Fila(10);
            int sair = 0;
                        
            while(sair == 0)
            {
                MenuOpcoes.mostraOpcoes();
                int opcao = int.Parse(Console.ReadLine());

                if (opcao == 0)
                {
                    sair = 1;
                }
                else
                {
                    switch (opcao)
                    {
                        case 1:
                            string tmpNomeCliente = "";
                            string tmpDescricaoServico = "";
                            string tmpCarro = "";

                            Console.Clear();
                            Console.WriteLine("-----------------------------------------------------------");
                            Console.WriteLine("|      OFICINA CHAVE DE RODAS - AGENDAMENTO DE SERVIÇOS   |");
                            Console.WriteLine("|---------------------------------------------------------|");
                            Console.WriteLine("|               - Inclusão de Agendamento -               |");
                            Console.WriteLine("-----------------------------------------------------------");

                            Console.Write("  Cliente: ");
                            tmpNomeCliente = Console.ReadLine();
                            Console.WriteLine("");
                            Console.Write("  Serviço Solicitado: ");
                            tmpDescricaoServico = Console.ReadLine();
                            Console.WriteLine("");
                            Console.Write("  Carro:  ");
                            tmpCarro = Console.ReadLine();

                            fila.insert(tmpNomeCliente, tmpDescricaoServico, tmpCarro);
                            Console.Clear();
                            break;

                        case 2:
                            Console.Clear();
                            Console.WriteLine("-----------------------------------------------------------");
                            Console.WriteLine("|      OFICINA CHAVE DE RODAS - AGENDAMENTO DE SERVIÇOS   |");
                            Console.WriteLine("|---------------------------------------------------------|");
                            Console.WriteLine("|             - Conclusão de Serviços Agendado            |");
                            Console.WriteLine("-----------------------------------------------------------");

                            string nomeCliente = fila.concluir();
                            if (nomeCliente == " ")
                            {
                                Console.WriteLine(" Não há nenhum agendamento!!  ");

                            }
                            else
                            {
                                Console.WriteLine(" \n Cliente: " + nomeCliente);
                            }

                            Console.WriteLine("\n\n Precione uma tecla para retornar ao MENU");
                            Console.ReadKey();
                            Console.Clear();

                            break;

                        case 3:
                            Console.Clear();
                            Console.WriteLine("-----------------------------------------------------------");
                            Console.WriteLine("|      OFICINA CHAVE DE RODAS - AGENDAMENTO DE SERVIÇOS   |");
                            Console.WriteLine("|---------------------------------------------------------|");
                            Console.WriteLine("|              - Lista de Serviços Agendados -            |");
                            Console.WriteLine("-----------------------------------------------------------");

                            Console.WriteLine("____________________________________________________________");
                            Console.WriteLine("|   - Cliente   |   Serviço   |   Carro  -                  |");
                            Console.WriteLine("|                                                           |");

                            string mostra = fila.mostrar();

                            Console.WriteLine( mostra );
                            Console.WriteLine("\n\n Precione uma tecla para retornar ao MENU");
                            Console.ReadKey();
                            Console.Clear();

                            break;

                        default:

                            break;
                    }
                }
            }

        }
              
    }
}
