func reverse(x int) int {
    
    result := 0
    isNegetive := false
    
    if x < 0 {
        isNegetive = true
        x *= -1
    }
    
    for x != 0 {
        result = result * 10 + (x % 10)
        x /= 10
    }
    
    if isNegetive {
        result *= -1
    }
    
    if result < math.MinInt32 || result > math.MaxInt32 {
        return 0
    }
    
    return result
}
