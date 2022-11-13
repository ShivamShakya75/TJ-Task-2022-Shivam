import java.util.HashSet;
import java.util.Set;

public class largestpositiveInt {
    public int largestK(int[] nums ){
        Set<Integer> s = new HashSet<>();
        for(int num : nums){
            s.add(num);
        }

        int ans = -1;
        for(int num : nums){
            if(num>0){
                if(s.contains(-num)){
                    ans = Math.max(ans, num);
                }
            }
        }
        return ans;
    }
}
