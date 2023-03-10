from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render


def aboutUs(request):
    return render(request, "about.html")

def Home(request):
    return render(request, "index.html")

def product(request):
    return render(request, "product.html")

def sProduct(reqest):
    return render(reqest, "single-product.html")

def contact(reqest):
    return render(reqest, "contact.html")

def category(reqest):
    return render(reqest, "category.html")

def cart(reqest):
    return render(reqest, "cart.html")

def my_account(reqest):
    return render(reqest, "my_account.html")

def wishlist(reqest):
    return render(reqest, "wishlist.html")

def checkout(reqest):
    return render(reqest, "checkout.html")

def login(request):
    return render(request, "login.html")

def register(request):
    return render(request, "register.html")


def userGetForm(request):
    answer=0
    try:
        # n1=request.GET['num1']
        # n2=int(request.GET['num2'])
        
        n1=request.GET.get('num1')
        n2=int(request.GET.get('num2'))
        answer=n1+n2
    except:
        pass
    return render(request, "userForm.html", {'output': answer})

def userPostForm(request):
    answer=0
    data={}
    try:
        if request.method == "POST":
            # n1=request.POST['num1']
            # n2=int(request.POST['num2'])
           
            n1=request.POST.get('num1')
            n2=int(request.POST.get('num2'))
            answer=n1+n2
            data={
                'n1': n1,
                'n2': n2,
                'output': answer
            }
    except:
        pass
    return render(request, "userForm.html", data)