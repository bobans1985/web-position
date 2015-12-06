<?php
if(!defined("IN_ADMIN")) die;  
if (empty($_GET['prev']))
    $str_day_dynamic="sysdate";
else
    $str_day_dynamic="sysdate-1";

//Зачисленные платежи--------------------------------------------------------
 $title1="Зачисленные платежи";
 $sql1 = "select 
		BNK.iBNKdocnum   doc_num, 
                to_Char(BNK.mBNKsum,'fm999g999g999g999g990d00') amount,
		Decode(BNK.cBNKdc,'Т',BNK.cBNKnamea,BNK.cBNKnameo)       client_name, 
		Decode(BNK.cBNKdc,'Т',BNK.cBNKacca,BNK.cBNKoriginalacco) client_acc, 
		Decode(BNK.cBNKdc,'К',BNK.cBNKacca,BNK.cBNKoriginalacco) corr_acc, 
		Decode(BNK.cBNKdc,'К',BNK.cBNKnamea,BNK.cBNKnameo)       corr_name, 
		NVL(FOG.cFOGshortname,FOG.cFOGname)                      corr_bank_name, 
		BNK.cBNKpurp     purpose
			  from POT, 
			       BNK, 
			       FOG, 
			       DVR 
  				  where POT.dPOTdebarkat=to_date(to_char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.YYYY'),'DD.MM.YYYY') and 
				        POT.cPOTcoracc='30102810500000000194' and 
				        POT.cPOTcur='RUR' and 
				        POT.iPOTportion between 1 and 5 and 
				        POT.cPOTportion_type='A' and 
				        BNK.iBNKportionid=POT.iPOTid and 
				        BNK.cBNKdc in ('К','Т') and 
				        FOG.cFOGmfo8(+)=Decode(BNK.cBNKdc,'К',BNK.cBNKmfoa,BNK.cBNKmfoo) and 
				        DVR.iDVRbnkid(+)=BNK.iBNKid";

//Списанные платежи----------------------------------------------------------
$title2="Списанные платежи";
$sql2 = "select 
		       TRN.iTRNdocnum doc_num,
	               to_Char(TRN.mTRNsum ,'fm999g999g999g999g990d00') amount,
		       NVL(CUS.cCUSname_sh,CUS.cCUSname) client_name, 
		       ACC.cACCacc                       client_acc, 
		       TRN.cTRNowna   corr_name, 
		       TRN.cTRNacca   corr_acc, 
		       TRN.cTRNbnamea corr_bank_name, 
		       TRN.cTRNpurp   purpose
			  from TRN, 
			       ACC, 
			       CUS 
				  where  
				        /*TRN{*/ 
					 trunc(dTRNtran)=to_Date(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.RRRR') and
				        cTRNaccc='30102810500000000194' and cTRNcurc='RUR' and iTRNtype>=0
				        and 
				        /*}TRN*/ 
				        ACC.cACCacc=TRN.cTRNaccd and
				        ACC.cACCcur=TRN.cTRNcur and
				        CUS.iCUSnum=ACC.iACCcus";

//Предварительные поступления------------------'-----------------------------
$title3="Предварительные поступления";
$sql3 = "select 
                PS_PP_Prepayment.DOC_NUM,
	        to_Char(PS_PP_Prepayment.AMOUNT,'fm999g999g999g999g990d00') amount,
	        PS_PP_Prepayment.CLIENT_ACC,
                PS_PP_Prepayment.CORR_ACC,
	        NVL(NVL(NVL(CUS.cCUSname_sh,CUS.cCUSname),ACC.cACCname_sh),ACC.cACCname) client_name,
		NVL(NVL(FOG.cFOGshortname,FOG.cFOGname),PS_PP_Prepayment.corr_bic) corr_bank_name
 		          from PS_PP_Prepayment,
			       FOG,
			       ACC,
			       CUS
				  where FOG.cFOGmfo8(+)=PS_PP_Prepayment.corr_bic and
				        ACC.cACCacc(+)=PS_PP_Prepayment.client_acc and
				        ACC.cACCcur(+)='RUR' and
				        CUS.iCUSnum(+)=ACC.iACCcus and
				        portion_date=to_date(to_char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.YYYY'),'DD.MM.YYYY') and
				        portion_num=".$num."
					order by amount desc";

//Платежи к отправке----------------------------------------------------------
$title4="Платежи к отправке";
$sql4 ="select 
	       TRN.iTRNdocnum doc_num, 
               to_Char(TRN.mTRNsum ,'fm999g999g999g999g990d00')   amount,
	       NVL(CUS.cCUSname_sh,CUS.cCUSname) client_name, 
	       ACC.cACCacc                       client_acc, 
	       TRN.cTRNowna   corr_name, 
	       TRN.cTRNacca   corr_acc, 
	       TRN.cTRNbnamea corr_bank_name, 
	       TRN.cTRNpurp   purpose
		  from TRN, 
		       ACC, 
		       CUS 
         		  where  
			        /*TRN{*/ 
			        cTRNemptytran='1' and 
			        NVL(dTRNval,dTRNcreate)<=to_Date(to_Char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.RRRR'),'DD.MM.RRRR') and 
			        cTRNmfoo!=cTRNmfoa and 
			        cTRNcurc='RUR' and 
			        (cTRNstate1 in ('1','2') or 
		                (cTRNstate1='3' and 
		                cTRNstate2='0') or 
		                (cTRNstate1='3' and 
		                cTRNstate2='1' and 
		                cTRNaccc='30102810500000000194'))
	              	        /*}TRN*/ and 
			        ACC.cACCacc=TRN.cTRNaccd and 
			        ACC.cACCcur=TRN.cTRNcur and 
			        CUS.iCUSnum=ACC.iACCcus";	
//Отложенные платежи----------------------------------------------------------
$title5="Отложенные платежи";
$sql5= "select  
		       DP_Doc.idocnum doc_num, 
		       to_Char(DP_Doc.msumm,'fm999g999g999g999g990d00')   amount, 
		       NVL(CUS.cCUSname_sh,CUS.cCUSname) client_name, 
		       ACC.cACCacc                       client_acc, 
		       DP_Doc.crecipname corr_name, 
		       DP_Doc.crecipacc  corr_acc, 
		       DP_Doc.crecipbankname corr_bank_name, 
		       DP_Doc.cpurp purpose
		  from DP_Doc, 
			       ACC, 
			       CUS 
				  where DP_Doc.dcreate<=to_date(to_Char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.RRRR'),'DD.MM.RRRR') and 
				        DP_Doc.ccur='RUR' and 
				        ACC.cACCacc=DP_Doc.cpayeracc and 
				        ACC.cACCcur=DP_Doc.ccur and 
				        CUS.iCUSnum=ACC.iACCcus";

//Выгруженные платежи----------------------------------------------------------
$title6="Выгруженные платежи";
$sql6= "select 
	       TRN.iTRNdocnum doc_num, 
	       to_Char(TRN.mTRNsum,'fm999g999g999g999g990d00')   amount,
	       NVL(CUS.cCUSname_sh,CUS.cCUSname) client_name, 
	       ACC.cACCacc                       client_acc, 
	       TRN.cTRNowna   corr_name, 
	       TRN.cTRNacca   corr_acc, 
	       TRN.cTRNbnamea corr_bank_name, 
	       TRN.cTRNpurp   purpose
		  from TRN, 
		       ACC, 
		       CUS 
			  where  
			        /*TRN{*/ 
			        cTRNstate1='3' and 
			        cTRNstate2='2' and 
			        (iTRNnum, 
			         iTRNanum) not in (select PS_PP_ED101.trn_num, 
                                  PS_PP_ED101.trn_anum 
	                                  from PS_PP_ED101) and 
					        (iTRNnum, 
					         iTRNanum) in (select D2P.iD2Ptrnnum, 
	                                          D2P.iD2Ptrnanum 
		                                     from POT, 
		                                          D2P 
		                                     where POT.dPOTdebarkat=to_Date(to_Char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.RRRR'),'DD.MM.RRRR') and 
		                                           POT.cPOTportion_type='M' and 
		                                           POT.cPOTcoracc='30102810500000000194' and 
		                                           POT.cPOTcur='RUR' and 
		                                           POT.iPOTid not in (select PS_PP_ED201.portion_id 
	                                                        from PS_PP_ED201) and 
		                                           D2P.iD2Pportionid=POT.iPOTid)
			        /*}TRN*/ and 
				        ACC.cACCacc=TRN.cTRNaccd and 
				        ACC.cACCcur=TRN.cTRNcur and 
				        CUS.iCUSnum=ACC.iACCcus";		
//В реестре для МЦИ----------------------------------------------------------
$title7="В реестре для МЦИ";
$sql7= "select 
	       TRN.iTRNdocnum doc_num, 
	       to_Char(TRN.mTRNsum,'fm999g999g999g999g990d00')   amount,
	       NVL(CUS.cCUSname_sh,CUS.cCUSname) client_name, 
	       ACC.cACCacc                       client_acc, 
	       TRN.cTRNowna   corr_name, 
	       TRN.cTRNacca   corr_acc, 
	       TRN.cTRNbnamea corr_bank_name, 
	       TRN.cTRNpurp   purpose
			  from TRN, 
			       ACC, 
			       CUS 
				  where  
				        /*TRN{*/ 
				        cTRNstate1='3' and 
				        cTRNstate2='2' and 
				        (iTRNnum, 
					         iTRNanum) in (select PS_PP_ED101.trn_num, 
                                         PS_PP_ED101.trn_anum 
                                     from POT, 
                                          D2P, 
                                          PS_PP_ED101 
                                     where POT.dPOTdebarkat=to_Date(to_Char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.RRRR'),'DD.MM.RRRR') and 
                                           POT.cPOTportion_type='M' and 
                                           POT.cPOTcoracc='30102810500000000194' and 
                                           POT.cPOTcur='RUR' and 
                                           POT.iPOTid not in (select PS_PP_ED201.portion_id 
                                                                from PS_PP_ED201) and 
                                           D2P.iD2Pportionid=POT.iPOTid and 
                                           PS_PP_ED101.trn_num=D2P.iD2Ptrnnum and 
                                           PS_PP_ED101.trn_anum=D2P.iD2Ptrnanum)
            		        /*}TRN*/ and 
						        ACC.cACCacc=TRN.cTRNaccd and 
						        ACC.cACCcur=TRN.cTRNcur and 
						        CUS.iCUSnum=ACC.iACCcus";

//Принятые МЦИ платежи----------------------------------------------------------
$title8="Принятые МЦИ платежи";
$sql8= "select 
		      TRN.iTRNdocnum doc_num, 
                     to_Char(TRN.mTRNsum,'fm999g999g999g999g990d00')   amount,
		       NVL(CUS.cCUSname_sh,CUS.cCUSname) client_name, 
		       ACC.cACCacc                       client_acc, 
		       TRN.cTRNowna   corr_name, 
		       TRN.cTRNacca   corr_acc, 
		       TRN.cTRNbnamea corr_bank_name, 
		       TRN.cTRNpurp   purpose
			  from TRN, 
			       ACC, 
			       CUS 
				  where  
				        /*TRN{*/ 
				        cTRNstate1='3' and 
				        cTRNstate2='2' and 
				        (iTRNnum, 
					        iTRNanum) in (select D2P.iD2Ptrnnum, 
                                        D2P.iD2Ptrnanum 
                                    from POT, 
                                         PS_PP_ED201, 
                                         D2P 
                                    where POT.dPOTdebarkat=to_Date(to_Char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.RRRR'),'DD.MM.RRRR') and 
                                          POT.CPOTportion_type='M' and 
                                          POT.cPOTcoracc='30102810500000000194' and 
                                          POT.cPOTcur='RUR' and 
                                          PS_PP_ED201.portion_id=POT.iPOTid and 
                                          D2P.iD2Pportionid=POT.iPOTid and 
                                          NVL(D2P.cD2Pstatecode,19)=19)
				        /*}TRN*/ and 
				        ACC.cACCacc=TRN.cTRNaccd and 
				        ACC.cACCcur=TRN.cTRNcur and 
				        CUS.iCUSnum=ACC.iACCcus";


//В том числе по рейсам--------------------------------------------------------
$title9="Рейсы";
$sql9= "select IPOTPORTION,
	       to_Char(AMOUNT,'fm999g999g999g999g990d00')   amount, 
               COUNT
     from 
    (select    POT.iPOTid,
               POT.dPOTdebarkat,
               POT.cPOTcoracc,
               POT.cPOTcur,
               POT.iPOTportion,
               Sum(BNK_V.mcredit) amount,
               Count(*) count
          from POT,
               BNK_VH,
               BNK_V
          where POT.cPOTportion_type='V' and
            	POT.iPOTportion in (1,2,3,4,5) and
                BNK_VH.idpot=POT.iPOTid and
                BNK_V.idhead=BNK_VH.id and
                BNK_V.mcredit is not null 
         group by POT.dPOTdebarkat,
                  POT.cPOTcoracc,
                  POT.cPOTcur,
                  POT.iPOTportion,
                  POT.iPOTid
           ) 
        where 
             dPOTdebarkat=to_date(to_Char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.RRRR'),'DD.MM.RRRR') and
             cPOTcoracc='30102810500000000194' and
             cPOTcur='RUR'
        order by iPOTportion";

//Зачисленные платежи по рейсу--------------------------------------------------------
$title10="Зачисленные платежи по рейсу № ".$num;
$sql10="select
               BNK.iBNKdocnum   doc_num,
	       to_Char(BNK.mBNKsum,'fm999g999g999g999g990d00')   amount, 
	       Decode(BNK.cBNKdc,'Т',BNK.cBNKacca,BNK.cBNKoriginalacco) client_acc,
	       Decode(BNK.cBNKdc,'Т',BNK.cBNKnamea,BNK.cBNKnameo)       client_name,
	       Decode(BNK.cBNKdc,'К',BNK.cBNKacca,BNK.cBNKoriginalacco) corr_acc,
	       Decode(BNK.cBNKdc,'К',BNK.cBNKnamea,BNK.cBNKnameo)       corr_name,
	       NVL(FOG.cFOGshortname,FOG.cFOGname)                      corr_bank_name,
   	       BNK.cBNKpurp     purpose
		  from POT,
		       BNK,
		       FOG,
		       DVR
			  where POT.dPOTdebarkat=to_Date(to_Char(npi_scheduler.get_first_work_day_back(". $str_day_dynamic."),'DD.MM.RRRR'),'DD.MM.RRRR') and                                             
			        POT.cPOTcoracc='30102810500000000194' and
			        POT.cPOTcur='RUR' and
			        POT.iPOTportion=".$num." and
			        POT.cPOTportion_type='A' and
			        BNK.iBNKportionid=POT.iPOTid and
			        BNK.cBNKdc in ('К','Т') and
			        FOG.cFOGmfo8(+)=Decode(BNK.cBNKdc,'К',BNK.cBNKmfoa,BNK.cBNKmfoo) and
			        DVR.iDVRbnkid(+)=BNK.iBNKid";


?>