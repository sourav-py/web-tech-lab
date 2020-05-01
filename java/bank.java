class Account{
    String customerName;
    long accNo;
    String type;
    float bal = 0;


    public void deposit(float d){
        bal += d;
        System.out.println("Deposit successfull . Balance : "+bal);
    }

    public void printDetails(){
        System.out.println(customerName);
        System.out.println(accNo);
        System.out.println("ac type : "+type);
        System.out.println("Balance : "+bal);
    }
}

class currAcct extends Account{
    float minBal = 50; //default 50
    float penalty = 0;
    public currAcct(String name,long an){
        customerName = name;
        accNo = an;
        type = "curr";
    }
    public void withdraw(float w){
        if(bal >= w){
            if(bal - w < minBal)
            {
                bal -= w;
                penalty += 10;
                System.out.println("Withdrawal of amount : "+w+" successful. Balance : "+bal);
                System.out.println("Penalty imposed , total penalty till now : "+penalty);
            }
            else{
                bal -= w;
                System.out.println("Withdrawal of amount : "+w+" successful. Balance : "+bal);
            }
        }
        else{
            System.out.println("Not enough Balance");
        }
    }
    
}

class SavAccount extends Account{
    float interest;
    public SavAccount(String name,long an){
        customerName = name;
        accNo = an;
        type = "sav";
    }
    public void withdraw(float w){
        if(bal >= w){
            bal -= w;
            System.out.println("Withdrawal of amount - "+w+" successful. Balance - "+bal);
        }
        else{
            System.out.println("Not enough Balance");
        }
    }

    public void computeInterest(){
        bal += (interest/100)*bal;
    }   
}


public class bank{
    public static void main(String[] args){
        currAcct ac1 = new currAcct("Sourav",101);
        ac1.deposit(60);
        ac1.withdraw(20);
        ac1.printDetails();
    }
}