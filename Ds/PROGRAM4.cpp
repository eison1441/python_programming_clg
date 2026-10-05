#include<stdio.h>
#include<stdlib.h>
#include<stdbool.h>

int *stack;
int top=-1;
int max;

/*check whether stack is empty*/
bool isEmpty()
{
	return top==-1;
}
/*Check whether stack is full*/
bool isFull()
{
	return top==max-1;
}

/*PUSH Operation*/
void push()
{
	int value;
	if(isFull())
		{
			printf("Stack is Full \n");
		}
	else
		{
			printf("Enter Push item :");
			scanf("%d",&value);
			top=top+1;
			stack[top]=value;
			printf("%d Pushed to Stack \n",value);
		}
}

/*POP Operation*/

void pop()
{
	if(isEmpty())
		{
			printf("Stack is Empty \n");
		}
	else
		{
			printf("%d Is poped out \n",stack[top]);
			top=top-1;
		}
}

/*Display Operation*/

void display()
{
	int i;
	if(!isEmpty())
	{
		for(i=0;i<=top;i++)
		{
			printf("Stack [%d] =%d \n",i+1,stack[i]);
		}
	}
	else
		{
			printf("Stack is Empty \n");
		}
}

/*PEEK Operation*/

void peek()
{
	if(!isEmpty())
		{
			printf("Top element is : %d \n",stack[top]);
		}
	else
		{
			printf("Stack is empty \n");
		}
}

/*Main Function*/
int main()
{
	int choice;
	printf("Enter the maximum size of the stack :");
	scanf("%d",&max);
	stack=(int*)malloc(max*sizeof(int));
	if(stack==NULL)
		{
			printf("Memory allocation faild!!\n");
			return 1;
		}

	do
		{
			printf("\n.................\n");
			printf("1. PUSH\n");
			printf("2. POP\n");
			printf("3. PEEK\n");
			printf("4. DISPLAY\n");
			printf("5. QUIT\n");
			printf("\n.................\n");
			printf("Select your choice :");
			scanf("%d",&choice);
			
			switch(choice)
			{
				case1:
					push();
					break;
				case2:
					pop();
					break;
				case3:
					peek();
					break;
				case4:
					display();
					break;
				case5:
					free(stack);\
					printf("Exiting Program .... Goodbye!!!");
			}
	}	whihle(1);
	return 0;
	}
