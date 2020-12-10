BEGIN
    PRC_INSERT_CLIENTE('CPF','NOME','LOGIN','SENHA','EMAIL',CURRENT_DATE)
END;



        XCPF        Cliente.cpf%TYPE,
        XNOME       Cliente.nome%TYPE,
        XLOGIN      Cliente.login%TYPE,
        XSENHA      Cliente.senha%TYPE,
        XEMAIL      Cliente.email%TYPE,
        XNASC       Cliente.dataNasc%TYPE