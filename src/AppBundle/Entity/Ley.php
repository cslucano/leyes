<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ley
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\LeyRepository")
 */
class Ley
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Adherentes", type="text")
     */
    private $Adherentes;

    /**
     * @var string
     *
     * @ORM\Column(name="Adherentes_mail", type="text")
     */
    private $Adherentes_mail;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIni", type="text")
     */
    private $CodIni;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIniSecu", type="text")
     */
    private $CodIniSecu;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIni_web", type="text")
     */
    private $CodIni_web;

    /**
     * @var string
     *
     * @ORM\Column(name="CodIni_web_1", type="text")
     */
    private $CodIni_web_1;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUltEsta", type="text")
     */
    private $CodUltEsta;

    /**
     * @var string
     *
     * @ORM\Column(name="DesComi", type="text")
     */
    private $DesComi;

    /**
     * @var string
     *
     * @ORM\Column(name="DesGrupParla", type="text")
     */
    private $DesGrupParla;

    /**
     * @var string
     *
     * @ORM\Column(name="DesGrupPol", type="text")
     */
    private $DesGrupPol;

    /**
     * @var string
     *
     * @ORM\Column(name="DesLegis", type="text")
     */
    private $DesLegis;

    /**
     * @var string
     *
     * @ORM\Column(name="DesPerio", type="text")
     */
    private $DesPerio;

    /**
     * @var string
     *
     * @ORM\Column(name="DesPropo", type="text")
     */
    private $DesPropo;

    /**
     * @var string
     *
     * @ORM\Column(name="DesSegui2_1", type="text")
     */
    private $DesSegui2_1;

    /**
     * @var string
     *
     * @ORM\Column(name="Distrito", type="text")
     */
    private $Distrito;

    /**
     * @var string
     *
     * @ORM\Column(name="FecPres", type="text")
     */
    private $FecPres;

    /**
     * @var string
     *
     * @ORM\Column(name="FecUltimo", type="text")
     */
    private $FecUltimo;

    /**
     * @var string
     *
     * @ORM\Column(name="Fecha_1", type="text")
     */
    private $Fecha_1;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCongre", type="text")
     */
    private $NomCongre;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCongreCoautor", type="text")
     */
    private $NomCongreCoautor;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCongre_mail", type="text")
     */
    private $NomCongre_mail;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreDeLaBaseDeDatos", type="text")
     */
    private $NombreDeLaBaseDeDatos;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreDeLaComision", type="text")
     */
    private $NombreDeLaComision;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreDelEnlace", type="text")
     */
    private $NombreDelEnlace;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreDelEstado", type="text")
     */
    private $NombreDelEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreDelFormulario", type="text")
     */
    private $NombreDelFormulario;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreDelPeriodoParlamentario", type="text")
     */
    private $NombreDelPeriodoParlamentario;

    /**
     * @var string
     *
     * @ORM\Column(name="NombredelGrupoParlamentario", type="text")
     */
    private $NombredelGrupoParlamentario;

    /**
     * @var string
     *
     * @ORM\Column(name="NumLey", type="text")
     */
    private $NumLey;

    /**
     * @var string
     *
     * @ORM\Column(name="NumLeyWeb", type="text")
     */
    private $NumLeyWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroDeProyectoLey", type="text")
     */
    private $NumeroDeProyectoLey;

    /**
     * @var string
     *
     * @ORM\Column(name="Promulgado", type="text")
     */
    private $Promulgado;

    /**
     * @var string
     *
     * @ORM\Column(name="SumIni", type="text")
     */
    private $SumIni;

    /**
     * @var string
     *
     * @ORM\Column(name="TitIni", type="text")
     */
    private $TitIni;

    /**
     * @var string
     *
     * @ORM\Column(name="TitLey", type="text")
     */
    private $TitLey;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo", type="text")
     */
    private $Titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="conexp", type="text")
     */
    private $conexp;

    /**
     * @var string
     *
     * @ORM\Column(name="conquechua", type="text")
     */
    private $conquechua;

    /**
     * @var string
     *
     * @ORM\Column(name="contex", type="text")
     */
    private $contex;

    /**
     * @var string
     *
     * @ORM\Column(name="fechapre", type="text")
     */
    private $fechapre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Adherentes
     *
     * @param string $adherentes
     * @return Ley
     */
    public function setAdherentes($adherentes)
    {
        $this->Adherentes = $adherentes;

        return $this;
    }

    /**
     * Get Adherentes
     *
     * @return string 
     */
    public function getAdherentes()
    {
        return $this->Adherentes;
    }

    /**
     * Set Adherentes_mail
     *
     * @param string $adherentesMail
     * @return Ley
     */
    public function setAdherentesMail($adherentesMail)
    {
        $this->Adherentes_mail = $adherentesMail;

        return $this;
    }

    /**
     * Get Adherentes_mail
     *
     * @return string 
     */
    public function getAdherentesMail()
    {
        return $this->Adherentes_mail;
    }

    /**
     * Set CodIni
     *
     * @param string $codIni
     * @return Ley
     */
    public function setCodIni($codIni)
    {
        $this->CodIni = $codIni;

        return $this;
    }

    /**
     * Get CodIni
     *
     * @return string 
     */
    public function getCodIni()
    {
        return $this->CodIni;
    }

    /**
     * Set CodIniSecu
     *
     * @param string $codIniSecu
     * @return Ley
     */
    public function setCodIniSecu($codIniSecu)
    {
        $this->CodIniSecu = $codIniSecu;

        return $this;
    }

    /**
     * Get CodIniSecu
     *
     * @return string 
     */
    public function getCodIniSecu()
    {
        return $this->CodIniSecu;
    }

    /**
     * Set CodIni_web
     *
     * @param string $codIniWeb
     * @return Ley
     */
    public function setCodIniWeb($codIniWeb)
    {
        $this->CodIni_web = $codIniWeb;

        return $this;
    }

    /**
     * Get CodIni_web
     *
     * @return string 
     */
    public function getCodIniWeb()
    {
        return $this->CodIni_web;
    }

    /**
     * Set CodIni_web_1
     *
     * @param string $codIniWeb1
     * @return Ley
     */
    public function setCodIniWeb1($codIniWeb1)
    {
        $this->CodIni_web_1 = $codIniWeb1;

        return $this;
    }

    /**
     * Get CodIni_web_1
     *
     * @return string 
     */
    public function getCodIniWeb1()
    {
        return $this->CodIni_web_1;
    }

    /**
     * Set CodUltEsta
     *
     * @param string $codUltEsta
     * @return Ley
     */
    public function setCodUltEsta($codUltEsta)
    {
        $this->CodUltEsta = $codUltEsta;

        return $this;
    }

    /**
     * Get CodUltEsta
     *
     * @return string 
     */
    public function getCodUltEsta()
    {
        return $this->CodUltEsta;
    }

    /**
     * Set DesComi
     *
     * @param string $desComi
     * @return Ley
     */
    public function setDesComi($desComi)
    {
        $this->DesComi = $desComi;

        return $this;
    }

    /**
     * Get DesComi
     *
     * @return string 
     */
    public function getDesComi()
    {
        return $this->DesComi;
    }

    /**
     * Set DesGrupParla
     *
     * @param string $desGrupParla
     * @return Ley
     */
    public function setDesGrupParla($desGrupParla)
    {
        $this->DesGrupParla = $desGrupParla;

        return $this;
    }

    /**
     * Get DesGrupParla
     *
     * @return string 
     */
    public function getDesGrupParla()
    {
        return $this->DesGrupParla;
    }

    /**
     * Set DesGrupPol
     *
     * @param string $desGrupPol
     * @return Ley
     */
    public function setDesGrupPol($desGrupPol)
    {
        $this->DesGrupPol = $desGrupPol;

        return $this;
    }

    /**
     * Get DesGrupPol
     *
     * @return string 
     */
    public function getDesGrupPol()
    {
        return $this->DesGrupPol;
    }

    /**
     * Set DesLegis
     *
     * @param string $desLegis
     * @return Ley
     */
    public function setDesLegis($desLegis)
    {
        $this->DesLegis = $desLegis;

        return $this;
    }

    /**
     * Get DesLegis
     *
     * @return string 
     */
    public function getDesLegis()
    {
        return $this->DesLegis;
    }

    /**
     * Set DesPerio
     *
     * @param string $desPerio
     * @return Ley
     */
    public function setDesPerio($desPerio)
    {
        $this->DesPerio = $desPerio;

        return $this;
    }

    /**
     * Get DesPerio
     *
     * @return string 
     */
    public function getDesPerio()
    {
        return $this->DesPerio;
    }

    /**
     * Set DesPropo
     *
     * @param string $desPropo
     * @return Ley
     */
    public function setDesPropo($desPropo)
    {
        $this->DesPropo = $desPropo;

        return $this;
    }

    /**
     * Get DesPropo
     *
     * @return string 
     */
    public function getDesPropo()
    {
        return $this->DesPropo;
    }

    /**
     * Set DesSegui2_1
     *
     * @param string $desSegui21
     * @return Ley
     */
    public function setDesSegui21($desSegui21)
    {
        $this->DesSegui2_1 = $desSegui21;

        return $this;
    }

    /**
     * Get DesSegui2_1
     *
     * @return string 
     */
    public function getDesSegui21()
    {
        return $this->DesSegui2_1;
    }

    /**
     * Set Distrito
     *
     * @param string $distrito
     * @return Ley
     */
    public function setDistrito($distrito)
    {
        $this->Distrito = $distrito;

        return $this;
    }

    /**
     * Get Distrito
     *
     * @return string 
     */
    public function getDistrito()
    {
        return $this->Distrito;
    }

    /**
     * Set FecPres
     *
     * @param string $fecPres
     * @return Ley
     */
    public function setFecPres($fecPres)
    {
        $this->FecPres = $fecPres;

        return $this;
    }

    /**
     * Get FecPres
     *
     * @return string 
     */
    public function getFecPres()
    {
        return $this->FecPres;
    }

    /**
     * Set FecUltimo
     *
     * @param string $fecUltimo
     * @return Ley
     */
    public function setFecUltimo($fecUltimo)
    {
        $this->FecUltimo = $fecUltimo;

        return $this;
    }

    /**
     * Get FecUltimo
     *
     * @return string 
     */
    public function getFecUltimo()
    {
        return $this->FecUltimo;
    }

    /**
     * Set Fecha_1
     *
     * @param string $fecha1
     * @return Ley
     */
    public function setFecha1($fecha1)
    {
        $this->Fecha_1 = $fecha1;

        return $this;
    }

    /**
     * Get Fecha_1
     *
     * @return string 
     */
    public function getFecha1()
    {
        return $this->Fecha_1;
    }

    /**
     * Set NomCongre
     *
     * @param string $nomCongre
     * @return Ley
     */
    public function setNomCongre($nomCongre)
    {
        $this->NomCongre = $nomCongre;

        return $this;
    }

    /**
     * Get NomCongre
     *
     * @return string 
     */
    public function getNomCongre()
    {
        return $this->NomCongre;
    }

    /**
     * Set NomCongreCoautor
     *
     * @param string $nomCongreCoautor
     * @return Ley
     */
    public function setNomCongreCoautor($nomCongreCoautor)
    {
        $this->NomCongreCoautor = $nomCongreCoautor;

        return $this;
    }

    /**
     * Get NomCongreCoautor
     *
     * @return string 
     */
    public function getNomCongreCoautor()
    {
        return $this->NomCongreCoautor;
    }

    /**
     * Set NomCongre_mail
     *
     * @param string $nomCongreMail
     * @return Ley
     */
    public function setNomCongreMail($nomCongreMail)
    {
        $this->NomCongre_mail = $nomCongreMail;

        return $this;
    }

    /**
     * Get NomCongre_mail
     *
     * @return string 
     */
    public function getNomCongreMail()
    {
        return $this->NomCongre_mail;
    }

    /**
     * Set NombreDeLaBaseDeDatos
     *
     * @param string $nombreDeLaBaseDeDatos
     * @return Ley
     */
    public function setNombreDeLaBaseDeDatos($nombreDeLaBaseDeDatos)
    {
        $this->NombreDeLaBaseDeDatos = $nombreDeLaBaseDeDatos;

        return $this;
    }

    /**
     * Get NombreDeLaBaseDeDatos
     *
     * @return string 
     */
    public function getNombreDeLaBaseDeDatos()
    {
        return $this->NombreDeLaBaseDeDatos;
    }

    /**
     * Set NombreDeLaComision
     *
     * @param string $nombreDeLaComision
     * @return Ley
     */
    public function setNombreDeLaComision($nombreDeLaComision)
    {
        $this->NombreDeLaComision = $nombreDeLaComision;

        return $this;
    }

    /**
     * Get NombreDeLaComision
     *
     * @return string 
     */
    public function getNombreDeLaComision()
    {
        return $this->NombreDeLaComision;
    }

    /**
     * Set NombreDelEnlace
     *
     * @param string $nombreDelEnlace
     * @return Ley
     */
    public function setNombreDelEnlace($nombreDelEnlace)
    {
        $this->NombreDelEnlace = $nombreDelEnlace;

        return $this;
    }

    /**
     * Get NombreDelEnlace
     *
     * @return string 
     */
    public function getNombreDelEnlace()
    {
        return $this->NombreDelEnlace;
    }

    /**
     * Set NombreDelEstado
     *
     * @param string $nombreDelEstado
     * @return Ley
     */
    public function setNombreDelEstado($nombreDelEstado)
    {
        $this->NombreDelEstado = $nombreDelEstado;

        return $this;
    }

    /**
     * Get NombreDelEstado
     *
     * @return string 
     */
    public function getNombreDelEstado()
    {
        return $this->NombreDelEstado;
    }

    /**
     * Set NombreDelFormulario
     *
     * @param string $nombreDelFormulario
     * @return Ley
     */
    public function setNombreDelFormulario($nombreDelFormulario)
    {
        $this->NombreDelFormulario = $nombreDelFormulario;

        return $this;
    }

    /**
     * Get NombreDelFormulario
     *
     * @return string 
     */
    public function getNombreDelFormulario()
    {
        return $this->NombreDelFormulario;
    }

    /**
     * Set NombreDelPeriodoParlamentario
     *
     * @param string $nombreDelPeriodoParlamentario
     * @return Ley
     */
    public function setNombreDelPeriodoParlamentario($nombreDelPeriodoParlamentario)
    {
        $this->NombreDelPeriodoParlamentario = $nombreDelPeriodoParlamentario;

        return $this;
    }

    /**
     * Get NombreDelPeriodoParlamentario
     *
     * @return string 
     */
    public function getNombreDelPeriodoParlamentario()
    {
        return $this->NombreDelPeriodoParlamentario;
    }

    /**
     * Set NombredelGrupoParlamentario
     *
     * @param string $nombredelGrupoParlamentario
     * @return Ley
     */
    public function setNombredelGrupoParlamentario($nombredelGrupoParlamentario)
    {
        $this->NombredelGrupoParlamentario = $nombredelGrupoParlamentario;

        return $this;
    }

    /**
     * Get NombredelGrupoParlamentario
     *
     * @return string 
     */
    public function getNombredelGrupoParlamentario()
    {
        return $this->NombredelGrupoParlamentario;
    }

    /**
     * Set NumLey
     *
     * @param string $numLey
     * @return Ley
     */
    public function setNumLey($numLey)
    {
        $this->NumLey = $numLey;

        return $this;
    }

    /**
     * Get NumLey
     *
     * @return string 
     */
    public function getNumLey()
    {
        return $this->NumLey;
    }

    /**
     * Set NumLeyWeb
     *
     * @param string $numLeyWeb
     * @return Ley
     */
    public function setNumLeyWeb($numLeyWeb)
    {
        $this->NumLeyWeb = $numLeyWeb;

        return $this;
    }

    /**
     * Get NumLeyWeb
     *
     * @return string 
     */
    public function getNumLeyWeb()
    {
        return $this->NumLeyWeb;
    }

    /**
     * Set NumeroDeProyectoLey
     *
     * @param string $numeroDeProyectoLey
     * @return Ley
     */
    public function setNumeroDeProyectoLey($numeroDeProyectoLey)
    {
        $this->NumeroDeProyectoLey = $numeroDeProyectoLey;

        return $this;
    }

    /**
     * Get NumeroDeProyectoLey
     *
     * @return string 
     */
    public function getNumeroDeProyectoLey()
    {
        return $this->NumeroDeProyectoLey;
    }

    /**
     * Set Promulgado
     *
     * @param string $promulgado
     * @return Ley
     */
    public function setPromulgado($promulgado)
    {
        $this->Promulgado = $promulgado;

        return $this;
    }

    /**
     * Get Promulgado
     *
     * @return string 
     */
    public function getPromulgado()
    {
        return $this->Promulgado;
    }

    /**
     * Set SumIni
     *
     * @param string $sumIni
     * @return Ley
     */
    public function setSumIni($sumIni)
    {
        $this->SumIni = $sumIni;

        return $this;
    }

    /**
     * Get SumIni
     *
     * @return string 
     */
    public function getSumIni()
    {
        return $this->SumIni;
    }

    /**
     * Set TitIni
     *
     * @param string $titIni
     * @return Ley
     */
    public function setTitIni($titIni)
    {
        $this->TitIni = $titIni;

        return $this;
    }

    /**
     * Get TitIni
     *
     * @return string 
     */
    public function getTitIni()
    {
        return $this->TitIni;
    }

    /**
     * Set TitLey
     *
     * @param string $titLey
     * @return Ley
     */
    public function setTitLey($titLey)
    {
        $this->TitLey = $titLey;

        return $this;
    }

    /**
     * Get TitLey
     *
     * @return string 
     */
    public function getTitLey()
    {
        return $this->TitLey;
    }

    /**
     * Set Titulo
     *
     * @param string $titulo
     * @return Ley
     */
    public function setTitulo($titulo)
    {
        $this->Titulo = $titulo;

        return $this;
    }

    /**
     * Get Titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->Titulo;
    }

    /**
     * Set conexp
     *
     * @param string $conexp
     * @return Ley
     */
    public function setConexp($conexp)
    {
        $this->conexp = $conexp;

        return $this;
    }

    /**
     * Get conexp
     *
     * @return string 
     */
    public function getConexp()
    {
        return $this->conexp;
    }

    /**
     * Set conquechua
     *
     * @param string $conquechua
     * @return Ley
     */
    public function setConquechua($conquechua)
    {
        $this->conquechua = $conquechua;

        return $this;
    }

    /**
     * Get conquechua
     *
     * @return string 
     */
    public function getConquechua()
    {
        return $this->conquechua;
    }

    /**
     * Set contex
     *
     * @param string $contex
     * @return Ley
     */
    public function setContex($contex)
    {
        $this->contex = $contex;

        return $this;
    }

    /**
     * Get contex
     *
     * @return string 
     */
    public function getContex()
    {
        return $this->contex;
    }

    /**
     * Set fechapre
     *
     * @param string $fechapre
     * @return Ley
     */
    public function setFechapre($fechapre)
    {
        $this->fechapre = $fechapre;

        return $this;
    }

    /**
     * Get fechapre
     *
     * @return string 
     */
    public function getFechapre()
    {
        return $this->fechapre;
    }
}
