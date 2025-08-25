import { Moon, Sun } from "lucide-react";
import { useTheme } from "./ThemeProviders";
import { Button } from "./ui/button";

export default function ThemeSwitcher(){
    const { theme, setTheme } = useTheme();
    
    const toggleTheme = () => {
        if (theme === 'dark') {
            setTheme('light');
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            setTheme('dark');
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'dark');
        }
    };

    return (
        <Button
            variant="outline"
            size="icon"
            className="ml-auto"
            onClick={toggleTheme}
        >
            {theme === 'dark' ? <Sun className="w-4 h-4"/> : <Moon className="w-4 h-4"/>}
        </Button>
    )
}