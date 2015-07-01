<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class APIController extends BaseController
{
    /**
     * Returns the generated phrase in the desired language
     *
     * @param string $language
     * @return string $phrase
     */
    public function getLeroLero($language)
    {
        switch($language)
        {
            case 'pt':
                $phrase = $this->getLeroLeroPT();
                break;
            case 'en':
                $phrase = $this->getLeroLeroEN();
                break;
        }
        return $phrase;
    }

    /**
     * Returns the generated Portuguese phrase
     *
     * @return string $phrase
     */
    private function getLeroLeroPT()
    {
        $phrase = "";

        $tab0 = array(
            "Caros amigos, ",
            "Por outro lado, ",
            "Assim mesmo, ",
            "No entanto, não podemos esquecer que ",
            "Do mesmo modo, ",
            "A prática cotidiana prova que ",
            "Nunca é demais lembrar o peso e o significado destes problemas, uma vez que ",
            "As experiências acumuladas demonstram que ",
            "Acima de tudo, é fundamental ressaltar que ",
            "O incentivo ao avanço tecnológico, assim como ",
            "Não obstante, ",
            "Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se ",
            "Pensando mais a longo prazo, ",
            "O que temos que ter sempre em mente é que ",
            "Ainda assim, existem dúvidas a respeito de como ",
            "Gostaria de enfatizar que ",
            "Todavia, ",
            "A nível organizacional, ",
            "O empenho em analisar ",
            "Percebemos, cada vez mais, que ",
            "No mundo atual, ",
            "É importante questionar o quanto ",
            "Neste sentido, ",
            "Evidentemente, ",
            "Por conseguinte, ",
            "É claro que ",
            "Podemos já vislumbrar o modo pelo qual ",
            "Desta maneira, ",
            "O cuidado em identificar pontos críticos n",
            "A certificação de metodologias que nos auxiliam a lidar com "
        );

        $tab1 = array(
            "a execução dos pontos do programa ",
            "a complexidade dos estudos efetuados ",
            "a contínua expansão de nossa atividade ",
            "a estrutura atual da organização ",
            "o novo modelo estrutural aqui preconizado ",
            "o desenvolvimento contínuo de distintas formas de atuação ",
            "a constante divulgação das informações ",
            "a consolidação das estruturas ",
            "a consulta aos diversos militantes ",
            "o início da atividade geral de formação de atitudes ",
            "o desafiador cenário globalizado ",
            "a mobilidade dos capitais internacionais ",
            "o fenômeno da Internet ",
            "a hegemonia do ambiente político ",
            "a expansão dos mercados mundiais ",
            "o aumento do diálogo entre os diferentes setores produtivos ",
            "a crescente influência da mídia ",
            "a necessidade de renovação processual ",
            "a competitividade nas transações comerciais ",
            "o surgimento do comércio virtual ",
            "a revolução dos costumes ",
            "o acompanhamento das preferências de consumo ",
            "o comprometimento entre as equipes ",
            "a determinação clara de objetivos ",
            "a adoção de políticas descentralizadoras ",
            "a valorização de fatores subjetivos ",
            "a percepção das dificuldades ",
            "o entendimento das metas propostas ",
            "o consenso sobre a necessidade de qualificação ",
            "o julgamento imparcial das eventualidades "
        );
        $tab2 = array(
            "nos obriga à análise ",
            "cumpre um papel essencial na formulação ",
            "exige a precisão e a definição ",
            "auxilia a preparação e a composição ",
            "garante a contribuição de um grupo importante na determinação ",
            "assume importantes posições no estabelecimento ",
            "facilita a criação ",
            "obstaculiza a apreciação da importância ",
            "oferece uma interessante oportunidade para verificação ",
            "acarreta um processo de reformulação e modernização ",
            "pode nos levar a considerar a reestruturação ",
            "representa uma abertura para a melhoria ",
            "ainda não demonstrou convincentemente que vai participar na mudança ",
            "talvez venha a ressaltar a relatividade ",
            "prepara-nos para enfrentar situações atípicas decorrentes ",
            "maximiza as possibilidades por conta ",
            "desafia a capacidade de equalização ",
            "agrega valor ao estabelecimento ",
            "é uma das consequências ",
            "promove a alavancagem ",
            "não pode mais se dissociar ",
            "possibilita uma melhor visão global ",
            "estimula a padronização ",
            "aponta para a melhoria ",
            "faz parte de um processo de gerenciamento ",
            "causa impacto indireto na reavaliação ",
            "apresenta tendências no sentido de aprovar a manutenção ",
            "estende o alcance e a importância ",
            "deve passar por modificações independentemente ",
            "afeta positivamente a correta previsão "
        );
        $tab3 = array(
            "das condições financeiras e administrativas exigidas.",
            "das diretrizes de desenvolvimento para o futuro.",
            "do sistema de participação geral.",
            "das posturas dos órgãos dirigentes com relação às suas atribuições.",
            "das novas proposições.",
            "das direções preferenciais no sentido do progresso.",
            "do sistema de formação de quadros que corresponde às necessidades.",
            "das condições inegavelmente apropriadas.",
            "dos índices pretendidos.",
            "das formas de ação.",
            "dos paradigmas corporativos.",
            "dos relacionamentos verticais entre as hierarquias.",
            "do processo de comunicação como um todo.",
            "dos métodos utilizados na avaliação de resultados.",
            "de todos os recursos funcionais envolvidos.",
            "dos níveis de motivação departamental.",
            "da gestão inovadora da qual fazemos parte.",
            "dos modos de operação convencionais.",
            "de alternativas às soluções ortodoxas.",
            "dos procedimentos normalmente adotados.",
            "dos conhecimentos estratégicos para atingir a excelência.",
            "do fluxo de informações.",
            "do levantamento das variáveis envolvidas.",
            "das diversas correntes de pensamento.",
            "do impacto na agilidade decisória.",
            "das regras de conduta normativas.",
            "do orçamento setorial.",
            "do retorno esperado a longo prazo.",
            "do investimento em reciclagem técnica.",
            "do remanejamento dos quadros funcionais."
        );

        shuffle($tab0);
        shuffle($tab1);
        shuffle($tab2);
        shuffle($tab3);

        $phrase = $tab0[$this->generateRandom(0,count($tab0))] . $tab1[$this->generateRandom(0,count($tab1))] . $tab2[$this->generateRandom(0,count($tab2))] . $tab3[$this->generateRandom(0,count($tab3))];

        return $phrase;
    }

    /**
     * Returns the generated English phrase
     *
     * @return string $phrase
     */
    private function getLeroLeroEN()
    {
        $phrase = "";
        return $phrase;
    }

    /**
     * Returns the generated Portuguese Insult phrase
     *
     * @return string $phrase
     */
    private function getLeroLeroPTInsult()
    {
        $phrase = "";
        return $phrase;
    }

    /**
     * Returns the generated English Insult phrase
     *
     * @return string $phrase
     */
    private function getLeroLeroENInsult()
    {
        $phrase = "";
        return $phrase;
    }

    /**
     * Returns the generated English Insult phrase
     *
     * @param int $startRange
     * @param int $endRange
     * @return int $number
     */
    private function generateRandom($startRange, $endRange)
    {
        return rand(intval($startRange),intval($endRange));
    }
}
