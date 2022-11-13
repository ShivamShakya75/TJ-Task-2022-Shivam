public class sixtynineNum {
    public int max69Num(int num){
        int nums[] = new int[4];
        int i=0, k=1;
        while(num!=0){
            nums[i++] = num%10;
            num/=10;

        }

        for(i=3; i>=0; i--)
        {
            if(nums[i] != 0){
                if(nums[i] == 6 && k-->0){
                    num = num*10+9;

                }
                else{
                    num= num *10 +nums[i];

                }
            }
        }
        return num;
    }
}
