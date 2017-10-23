#include <stdlib.h>
#include <stdio.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <unistd.h>
#include <dirent.h>
#include <errno.h>
#include <string.h>

int fisiere=0;
void parcrec(char *filename){
  DIR *director;  
  struct stat *i=(struct stat*)malloc(sizeof(struct stat));
  struct dirent *curent; 
  
  if (lstat(filename,i)<0){
      printf("A aparut o eroare ! \n");
      exit(1);
  }
    
   if(strcmp(curent->d_name, ".") == 0 || strcmp(curent->d_name, "..") == 0)
      continue; 
   
  if ((director = opendir(filename)) == NULL){
      printf("Folder inexistent !\n");
  }
  
  while((curent = readdir(director)) != NULL){ 
     if (lstat(filename,i)<0){
      printf("A aparut o eroare ! \n");
      exit(1);
  }
    
     if (S_ISDIR(i->st_mode))
         parcrec (curent->d_name);
     if ((S_ISREG(i->st_mode)) && ((i->st_mode & S_IROTH)==0))
         fisiere++;
 
  }
}


int main(int nr,char *arg[]){
  
  
  
  if (nr<2){
        printf("Usage %s dir \n",arg[0]);
    }

    
/*  if (S_ISDIR(arg[1])==NULL){
      printf("Folder existent "); 
  }
*/

parcrec(arg[1]);
  
  
  //if (S_ISDIR(i,)
  
  
  
  
 return 0;  
}
